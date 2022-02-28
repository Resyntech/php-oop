<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include './php/head.php';
        SEO("Lorem", "This is Lorem");
    ?>
<?php
    // if (isset($_SESSION['studentnumber']))
    //     header("location: index.php?signined=true");
    // else
?>
        <body>
            <?php include './php/components/Header.php'; ?>
            <div class="content">
                <section>
                    <h1>First Section</h1>
                    <p>Nostrud proident consectetur <span class="blue">elit cillum nisi cupidatat pariatur</span> labore exercitation veniam pariatur duis culpa officia. Enim excepteur duis Lorem reprehenderit cupidatat minim fugiat commodo adipisicing irure sint. Sint aliqua incididunt nisi adipisicing ea consequat. Nulla ea laborum adipisicing elit qui. Ex officia voluptate dolore minim aliqua magna pariatur do. Velit enim cillum non occaecat elit qui do commodo non. Velit mollit aute amet proident. Laboris quis eiusmod eu non eiusmod occaecat voluptate duis sint non pariatur deserunt. Aliquip do anim dolore laborum tempor. Aute eu ullamco consectetur nulla proident fugiat proident irure duis mollit. Occaecat velit adipisicing eiusmod cupidatat consectetur ex eu exercitation.</p>
                    <label>02/26/2022</label>
                </section>
                <section>
                    <h1>Second Section</h1>
                    <p>Commodo cillum ut sunt<span class="red"> quis ut occaecat</span> exercitation minim.</p>
                    <label>02/27/2022</label>
                </section>
                <section>
                    <h1>Third Section</h1>
                    <p>Est do amet laborum officia adipisicing cupidatat. Est sit dolor Lorem eu et elit aliqua deserunt reprehenderit sit dolor. Do magna occaecat veniam elit occaecat ad sint voluptate deserunt et ipsum pariatur minim. Amet reprehenderit exercitation ullamco elit excepteur mollit ullamco. Veniam anim labore occaecat ullamco irure irure mollit elit consectetur dolore et. Velit labore minim nostrud est minim eiusmod minim consequat.<span class="blue"> Cupidatat cillum minim reprehenderit fugiat irure aliqua labore. Consequat proident cupidatat veniam sit aute tempor amet sint sit velit. Eiusmod reprehenderit cillum labore Lorem excepteur adipisicing non tempor consequat exercitation eiusmod excepteur cillum.</span> Laboris irure incididunt aliqua consequat culpa et. Tempor exercitation in cillum Lorem adipisicing sit est laboris qui consequat reprehenderit officia velit qui. Aliquip aliqua ex anim veniam sit excepteur eiusmod sit aliquip adipisicing aliquip quis aute aute. Sit anim enim dolore incididunt dolor aliqua in sit officia elit. Officia Lorem laborum commodo ea minim eu qui cupidatat qui occaecat in nostrud sunt. Velit pariatur tempor magna amet et est aliquip eu exercitation ad consectetur consectetur veniam dolor. Exercitation eiusmod nulla eiusmod velit incididunt esse qui ea dolore proident dolor reprehenderit elit sint. Tempor minim ipsum elit exercitation laboris duis deserunt. Esse minim elit magna commodo ex id ullamco mollit duis veniam laboris aliquip minim incididunt. Do ullamco sint voluptate cillum elit in do in velit ad qui amet mollit aute. Laborum duis consectetur cillum ea. Lorem pariatur laborum commodo irure eiusmod. Laboris irure qui enim pariatur. Laboris in mollit quis duis culpa mollit incididunt. Tempor anim aliqua dolor reprehenderit aute est ea adipisicing irure duis fugiat et reprehenderit. In esse aute officia nisi laborum esse ullamco est irure amet magna. Amet quis esse voluptate dolor excepteur anim do. Adipisicing irure sit excepteur id dolore. Proident magna eiusmod amet deserunt exercitation proident eiusmod quis.</p>
                    <label>02/28/2022</label>
                </section>
            </div>
            <?php include './php/components/Footer.php'; ?>
        </body>
</html>
<style>
    .content {
        display: grid;
        gap: var(--gapping);
        margin: calc(var(--gapping)*3) 0;
        justify-content: center;
        align-items: center;
    }
    
    .content section {
        display: flex;
        flex-direction: column;
        gap: var(--gapping);
        padding: var(--gapping);
        width: 80vw;
        background-color: var(--lightblack);
        border: 2px var(--bordercolor) solid;
        border-radius: var(--round);
    }

    .content section p, .content section p span {
        text-align: center;
        font-size: var(--info);
    }
    .content section p {
        color: var(--gray);
    }
    .content section p .blue {
        color: var(--secondary);
    }
    .content section p .red {
        color: var(--error);
    }
    .content section label {
        text-align: end;
        color: var(--success);
    }
    .content section label::before {
        content: 'Date: ';
        text-transform: uppercase;
        color: var(--gray);
    }
</style>