<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './php/head.php';
        SEO("Sign Up", "This is Sign Up");
    ?>
<?php
    if (isset($_SESSION['studentnumber'])) {
        header("location: index.php?signined=true");
    } else
?>
        <body>
            <section>
                <form id="signupForm" method="POST" action="./php/class/signup/signup.php">
                    <script src="./js/components/signupTextfields.js"></script>
                    <div class="ornament">
                        <p>Already registered?</p>
                        <a href='./Signin.php'>Sign In</a>
                    </div>
                    <button class="button-primary" type="submit" name="submit">Sign Up</button>
                </form>
            </section>
        </body>
</html>
<link rel="stylesheet" href="./dist/ornament.css" />
<link rel="stylesheet" href="./dist/form.css" />