<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './head.php';
        SEO("Sign Up", "This is Sign Up");
    ?>
    <body>
        <?php include './Header.php'; ?>
        <div class="bg">
            <section>
                <form id="signupForm" method="POST" action="./php/class/signup/signup.php">
                    <script src="./js/components/signupTextfields.js"></script>
                    <div class="ornament">
                        <p>Already registered?</p>
                        <a href='./Signin.php'>Sign In</a>
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </section>
        </div>
        <?php include './Footer.php'; ?>
    </body>
</html>