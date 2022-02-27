<?php
    if(isset($_POST['submit'])) {
        // Grab Data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        // Instantiate Signup Controller Class
        include "../../../config/db.php";
        include "./signin-classes.php";
        include "./signin-controller.php";
        $signin = new SigninController($uid, $pwd);

        // Running Error Handlers
        $signin->signinUser();

        // Go back to front page
        header("location: ../../../index.php?error=none");
    }
?>