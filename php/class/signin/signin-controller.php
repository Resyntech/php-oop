<?php
    class SigninController extends Signin {
        private $email;
        private $pwd;

        public function __construct($email, $pwd) {
            $this->email = $email;
            $this->pwd = $pwd;
        }

        public function signinUser() {
                if ($this->isInputEmpty() === false) {
                    echo "Empty Input";
                    header("location: ../../../index.php?error=Empty Input");
                    exit();
                }

            $this->getUser($this->email, $this->pwd);
        }

        // ERROR HANDLERS
        private function isInputEmpty() {
            if (empty($this->email) || empty($this->pwd))
                return false;
            return true;
        }
    }
?>