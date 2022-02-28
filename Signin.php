<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './php/head.php';
        SEO("Sign In", "This is Sign In");
    ?>
<?php
    if (isset($_SESSION['studentnumber']))
        header("location: index.php?signined=true");
    else
?>
        <body>
            <section>
                <form id="signinForm" method="POST" action="./php/class/signin/signin.php">
                    <script src="./js/components/signinTextfields.js"></script>
                    <div class="ornament">
                        <p>Need registration? Enroll now!</p>
                        <a href='./Signup.php'>Sign Up</a>
                    </div>
                    <button class="button-primary" type="submit" name="submit">Sign In</button>
                </form>
            </section>
        </body>
</html>
<link rel="stylesheet" href="./dist/ornament.css" />
<link rel="stylesheet" href="./dist/form.css" />