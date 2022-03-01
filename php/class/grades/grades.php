<?php
    if(isset($_POST['submit'])) {
        // Grab Data
        session_start();
        $sem = $_POST['sem'];
        $studno = $_SESSION["studentnumber"];

        // Instantiate Signup Controller Class
        include "../../../config/db.php";
        include "./grades-classes.php";
        include "./grades-controller.php";
        $grades = new GradesController($studno, $sem);

        // Running Error Handlers
        $grades->gradesStudent();

    }
?>