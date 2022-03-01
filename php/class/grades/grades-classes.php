<?php
    class Grades extends Db {
        protected function getData($studno, $sem) {
            switch ($sem) {
                case '1st':
                    $stmt = $this->connect()->prepare('SELECT * FROM `grades` WHERE student_id = ?  AND semester = ?;');

                    if (!$stmt->execute(array($studno, $sem))) {
                        $stmt = null;
                        header("location: ../../../index.php?error=no_student_number");
                        exit();
                    }
                    $this->statementLength($stmt);

                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    for ($index = 0; $index < count($data); $index++) {
                        $_SESSION["subjectid".$index] = $data[$index]['subject_id'];
                        $_SESSION["grade".$index] = $data[$index]['grade'];

                        $stmt = $this->connect()->prepare('SELECT * FROM `subjects` WHERE subject_id = ?;');

                        if (!$stmt->execute(array($data[$index]['subject_id']))) {
                            $stmt = null;
                            header("location: ../../../index.php?error=no_subject");
                            exit();
                        }
                        $this->statementLength($stmt);
                        $arraySubjects[$index] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    }

                    for ($i=0; $i < count($arraySubjects); $i++) {
                        $placeholder = $arraySubjects[$i][0];
                        $newArray[$i] = array(
                            'subject_id' => $placeholder['subject_id'],
                            'subject_name' => $placeholder['subject_name'],
                            'grades' => $_SESSION["grade".$i]
                        );
                        echo '<br>';
                        print_r($newArray[$i]);
                    }
                    $_SESSION['firstsem'] = $newArray;

                    header("location: ../../../index.php?firstsem=".count($_SESSION['firstsem']));
                    break;
                
                case '2nd':
                    $stmt = $this->connect()->prepare('SELECT * FROM `grades` WHERE student_id = ? AND semester = ?;');

                    if (!$stmt->execute(array($studno, $sem))) {
                        $stmt = null;
                        header("location: ../../../index.php?error=no_student_number");
                        exit();
                    }
                    $this->statementLength($stmt);

                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    for ($index = 0; $index < count($data); $index++) {
                        $_SESSION["subjectid".$index] = $data[$index]['subject_id'];
                        $_SESSION["grade".$index] = $data[$index]['grade'];

                        $stmt = $this->connect()->prepare('SELECT * FROM `subjects` WHERE subject_id = ?;');

                        if (!$stmt->execute(array($data[$index]['subject_id']))) {
                            $stmt = null;
                            header("location: ../../../index.php?error=no_subject");
                            exit();
                        }
                        $this->statementLength($stmt);
                        $arraySubjects[$index] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    }

                    for ($i=0; $i < count($arraySubjects); $i++) {
                        $placeholder = $arraySubjects[$i][0];
                        $newArray[$i] = array(
                            'subject_id' => $placeholder['subject_id'],
                            'subject_name' => $placeholder['subject_name'],
                            'grades' => $_SESSION["grade".$i]
                        );
                        echo '<br>';
                        print_r($newArray[$i]);
                    }
                    $_SESSION['secondsem'] = $newArray;
                    header("location: ../../../index.php?secondsem=".count($_SESSION['secondsem']));
                    break;

                default:
                    $stmt = $this->connect()->prepare('SELECT * FROM `grades` WHERE student_id = ?;');

                    if (!$stmt->execute(array($studno))) {
                        $stmt = null;
                        header("location: ../../../index.php?error=no_student_number");
                        exit();
                    }
                    $this->statementLength($stmt);

                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    for ($index = 0; $index < count($data); $index++) {
                        $_SESSION["subjectid".$index] = $data[$index]['subject_id'];
                        $_SESSION["semester".$index] = $data[$index]['semester'];
                        $_SESSION["grade".$index] = $data[$index]['grade'];

                        $stmt = $this->connect()->prepare('SELECT * FROM `subjects` WHERE subject_id = ?;');

                        if (!$stmt->execute(array($data[$index]['subject_id']))) {
                            $stmt = null;
                            header("location: ../../../index.php?error=no_subject");
                            exit();
                        }
                        $this->statementLength($stmt);
                        $arraySubjects[$index] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    }

                    $first = [array(null)];
                    $second = [array(null)];
                    for ($i=0; $i < count($arraySubjects); $i++) {
                        $placeholder = $arraySubjects[$i][0];
                        switch ($_SESSION["semester".$i]) {
                            case '1st':
                                array_push($first, array(
                                    'subject_id' => $placeholder['subject_id'],
                                    'subject_name' => $placeholder['subject_name'],
                                    'grades' => $_SESSION["grade".$i],
                                    'semester' => $_SESSION["semester".$i]
                                ));
                                break;
                            
                            default:
                                array_push($second, array(
                                    'subject_id' => $placeholder['subject_id'],
                                    'subject_name' => $placeholder['subject_name'],
                                    'grades' => $_SESSION["grade".$i],
                                    'semester' => $_SESSION["semester".$i]
                                ));
                                break;
                        }
                        
                    }
                    array_shift($first);
                    array_shift($second);
                    $_SESSION['firstsem'] = $first;
                    $_SESSION['secondsem'] = $second;

                    header("location: ../../../index.php?firstsem=".count($_SESSION['firstsem'])."&secondsem=".count($_SESSION['secondsem']));
                    break;
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