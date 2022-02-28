<?php
    class GradesController extends Grades {
        private $studno;

        public function __construct($studno) {
            $this->studno = $studno;
        }

        public function gradesStudent() {
            $this->getData($this->studno);
        }
    }
?>