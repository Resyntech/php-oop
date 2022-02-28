<?php
    class Grades extends Db {
        protected function getData($studno) {
            $stmt = $this->connect()->prepare('SELECT subject_id, grade FROM `grades` WHERE student_id = ?;');

            if (!$stmt->execute(array($studno))) {
                $stmt = null;
                header("location: ../../../index.php?error=no_student_number");
                exit();
            }
            $this->statementLength($stmt);

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['gradelength'] = count($data);
            for ($index = 0; $index < count($data); $index++) {
                $_SESSION["array".$index] = $data[$index];
            }
        }

        private function statementLength($stmt) {
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../../../index.php?error=no result");
                exit();
            }
        }
    }
?>