<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './php/head.php';
        SEO("Home", "This is Home");
    ?>
    <body>
        <?php include './php/components/Header.php'; ?>
        <div class="main">
            <section>
<?php
            if (isset($_SESSION['studentnumber'])) {
?>
<div>
                <form id="gradesForm" method="POST" action="./php/class/grades/grades.php">
                    <script src="./js/components/grades.js"></script>
                    <button class="button-success" type="submit" name="submit">Grades</button>
                </form>
<?php
                if (isset($_GET['gradelength'])) {
                    for($index = 0; $index < $_GET['gradelength']; $index++) {
                        echo '<p class="data'.$index.'">';
                        print_r($_SESSION['array'.$index]);
                        echo '</p>';
                    }
                }
            }
            else {
?>
                <h1>Home</h1>
<?php       } ?>
            </section>
        </div>
        <?php include './php/components/Footer.php'; ?>
    </body>
</html>
<style>
    section {
        height: 100vh;
    }
    section p {
        font-size: var(--info);
        color: var(--gray);
    }
    section, form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>