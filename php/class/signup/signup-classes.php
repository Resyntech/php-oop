<?php
    class Signup extends Db {
        protected function setUser($course, $pwd, $firstname, $lastname) {
            $stmt = $this->connect()->prepare(
            'INSERT INTO students (student_course, student_pwd, student_email, student_firstname, student_lastname)
            VALUES (?,?,?,?,?);');
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            $fullname = str_replace(' ', '', $firstname.$lastname);

            if (!$stmt->execute(array($course, $hashedPwd, strtolower($fullname).'@studentreview.edu.ph', $firstname, $lastname))) {
                $stmt = null;
                header("location: ../../../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }
?>