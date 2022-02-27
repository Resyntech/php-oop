<?php
    if(isset($_POST['submit'])) {
        // Grab Data
        $course = $_POST["course"];
        $pwd = $_POST["pwd"];
        $cpwd = $_POST["cpwd"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        // Instantiate Signup Controller Class
        include "../../../config/db.php";
        include "./signup-classes.php";
        include "./signup-controller.php";
        $signup = new SignupController($course, $pwd, $cpwd, $firstname, $lastname);

        // Running Error Handlers
        $signup->signupUser();

        // Go back to front page
        header("location: ../../../index.php?error=none");
    }
?>