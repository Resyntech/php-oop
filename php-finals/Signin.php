<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './head.php';
        SEO("Sign In", "This is Sign In");
    ?>
    <body>
        <?php include './Header.php'; ?>
        <div class="bg">
            <section>
                <form id="signinForm" method="POST" action="./php/class/signin/signin.php">
                    <script src="./js/components/signinTextfields.js"></script>
                    <div class="ornament">
                        <p>Need registration? Enroll now!</p>
                        <a href='./Signup.php'>Sign Up</a>
                    </div>
                    <button type="submit" name="submit">Sign In</button>
                </form>
            </section>
        </div>
        <?php include './Footer.php'; ?>
    </body>
</html>