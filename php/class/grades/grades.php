<?php
    if(isset($_POST['submit'])) {
        // Grab Data
        session_start();
        $studno = $_SESSION["studentnumber"];

        // Instantiate Signup Controller Class
        include "../../../config/db.php";
        include "./grades-classes.php";
        include "./grades-controller.php";
        $grades = new GradesController($studno);

        // Running Error Handlers
        $grades->gradesStudent();

        // Go back to front page
        header("location: ../../../index.php?gradelength=".$_SESSION['gradelength']);
    }
?>