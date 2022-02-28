<?php
    if(isset($_POST['submit'])) {
        // Grab Data
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        // Instantiate Signup Controller Class
        include "../../../config/db.php";
        include "./signin-classes.php";
        include "./signin-controller.php";
        $signin = new SigninController($email, $pwd);

        // Running Error Handlers
        $signin->signinUser();

        // Go back to front page
        header("location: ../../../index.php?error=none");
    }
?>