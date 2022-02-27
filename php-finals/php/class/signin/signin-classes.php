<?php
    class Signin extends Db {
        protected function getUser($uid, $pwd) {
            $stmt = $this->connect()->prepare('SELECT student_pwd FROM students WHERE student_uid = ? OR student_email = ?;');

            if (!$stmt->execute(array($uid, $pwd))) {
                $stmt = null;
                header("location: ../../../index.php?error=stmtfailed");
                exit();
            }
            $this->statementLength($stmt);

            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Built-in password verification in PHP
            $checkPassword = password_verify($pwd, $pwdHashed[0]["student_pwd"]);

            if ($checkPassword == false) {
                $stmt = null;
                header("location: ../../../index.php?error=wrong password");
                return exit();
            }

            $stmt = $this->connect()->prepare('SELECT * FROM students WHERE student_uid = ? OR student_email = ?
            AND student_pwd = ?;');
            if (!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../../../index.php?error=stmtfailed");
                exit();
            }
            $this->statementLength($stmt);

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["student_id"];
            $_SESSION["useruid"] = $user[0]["student_uid"];
            
            $stmt = null;
        }

        private function statementLength($stmt) {
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../../../index.php?error=usernotfound");
                exit();
            }
        }
    }
?>