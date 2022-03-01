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
                if (isset($_GET['firstsem'])) {
?>
                <div class="first">
                    <h1>First Semester</h1>
                    <div class='tablehead'>
                        <p>Subject Id</p>
                        <p>Subject Name</p>
                        <p>Grade</p>
                    </div>
<?php
                    for($index = 0; $index < $_GET['firstsem']; $index++) {
                        $first = $_SESSION['firstsem'][$index];
                        echo '<div class="data">';
                        echo '<p>' . $first['subject_id'] . '</p>';
                        echo '<p>' . $first['subject_name'] . '</p>';
                        echo '<p>' . $first['grades'] . '</p>';
                        echo '</div>';
                    }
                }
?>
                </div>
<?php
                if (isset($_GET['secondsem'])) {
?>
                <div class="second">
                    <h1>Second Semester</h1>
                    <div class='tablehead'>
                        <p>Subject Id</p>
                        <p>Subject Name</p>
                        <p>Grade</p>
                    </div>
<?php
                    for($index = 0; $index < $_GET['secondsem']; $index++) {
                        $second = $_SESSION['secondsem'][$index];
                        echo '<div class="data">';
                        echo '<p>' . $second['subject_id'] . '</p>';
                        echo '<p>' . $second['subject_name'] . '</p>';
                        echo '<p>' . $second['grades'] . '</p>';
                        echo '</div>';
                    }
                }
?>
                </div>
<?php
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
        padding: var(--gapping) 0;
    }
    .first, .second {
        display: grid;
        justify-content: center;
        align-items: center;
        border: 2px var(--bordercolor) solid;
        border-radius: var(--round);
    }
    .tablehead, .data {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3em;
    }
    .tablehead p, .data p {
        text-align: center;
        font-size: var(--info);
    }
    .data p {
        color: var(--gray);
    }
    /* .data {
        width: 80vw;
    } */
    .data, section, form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: var(--gapping);
    }
    select {
        position: relative;
        z-index: 10;
        border: 2px var(--bordercolor) solid;
        border-radius: var(--round);
        background-color: var(--black);
        width: max-content;
        color: var(--white);
        padding: calc(var(--gapping)*0.5) var(--gapping);
    }
</style>