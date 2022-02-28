<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './php/head.php';
        SEO("About", "This is About");
    ?>
<?php
    // if (isset($_SESSION['studentnumber']))
    //     header("location: index.php?signined=true");
    // else
?>
        <body>
            <?php include './php/components/Header.php'; ?>
            <section>
                <p>This is About Page</p>
            </section>
            <?php include './php/components/Footer.php'; ?>
        </body>
</html>
<style>
    section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section p {
        font-size: var(--headings);
    }
</style>