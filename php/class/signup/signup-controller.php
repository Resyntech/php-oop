<?php
    class SignupController extends Signup {
        private $course;
        private $pwd;
        private $cpwd;
        private $firstname;
        private $lastname;

        public function __construct($course, $pwd, $cpwd, $firstname, $lastname) {
            $this->course = $course;
            $this->pwd = $pwd;
            $this->cpwd = $cpwd;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        public function signupUser() {
            $arrayOfMethods = [$this->isInputEmpty(), $this->isPasswordMatch()];
            $arrayString = ["Empty Inputs", "Password Doesn't Match"];
            foreach ($arrayOfMethods as $key => $value) {
                if ($value === false) {
                    echo $arrayString[$key];
                    header("location: ../../../signup.php?error=".$arrayString[$key]);
                    exit();
                }
            }

            $this->setUser($this->course, $this->pwd, $this->firstname, $this->lastname);
        }

        // ERROR HANDLERS
        private function isInputEmpty() {
            if (empty($this->course) || empty($this->pwd) || empty($this->cpwd) || empty($this->firstname) || empty($this->lastname))
                return false;
            return true;
        }
        private function isPasswordMatch() {
            if ($this->pwd !== $this->cpwd)
                return false;
            return true;
        }
    }
?>