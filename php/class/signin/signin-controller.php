<?php
    class SigninController extends Signin {
        private $uid;
        private $pwd;

        public function __construct($uid, $pwd) {
            $this->uid = $uid;
            $this->pwd = $pwd;
        }

        public function signinUser() {
                if ($this->isInputEmpty() === false) {
                    echo "Empty Input";
                    header("location: ../../../index.php?error=Empty Input");
                    exit();
                }

            $this->getUser($this->uid, $this->pwd);
        }

        // ERROR HANDLERS
        private function isInputEmpty() {
            if (empty($this->uid) || empty($this->pwd))
                return false;
            return true;
        }
    }
?>