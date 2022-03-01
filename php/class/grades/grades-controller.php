<?php
    class GradesController extends Grades {
        private $studno;
        private $sem;

        public function __construct($studno, $sem) {
            $this->studno = $studno;
            $this->sem = $sem;
        }

        public function gradesStudent() {
            $this->getData($this->studno, $this->sem);
        }
    }
?>