<header>
    <div class="logo">
        <h1 onclick="window.location.href = '/php-finals'">PHP Finals</h1>
    </div>
    <?php include 'Navbar.php' ?>
    <div class="hamburger">
        <button id="hamb">
            <img id="image" width="32" height="32" alt="hamburger-icon" />
        </button>
        <div id="modal-box" class="modal hidden">
        <?php 
            if (isset($_SESSION['studentnumber'])) {
        ?>
            <div>
                <div class="dashboard">
                    <div>
                        <img src="./public/user-solid.svg" width="32"height="32" alt="user" />
                    </div>
                    <h1>Dashboard</h1>
                </div>
                <h3>Student number: <?php echo $_SESSION['studentnumber']; ?></h3>
                <h3>Email: <?php echo $_SESSION['studentemail']; ?></h3>
                <a href="./php/signout.php" class="button-error">Sign Out</a>
            </div>
        <?php
            } else {
        ?>
            <div>
                <a href="Signin.php" class="button-outlined">Sign In</a>
                <a href="Signup.php" class="button-outlined">Sign Up</a>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
</header>
<script>
    const hamburger = document.querySelector('#hamb')
    const image = document.querySelector('#image')
    const modal = document.querySelector('#modal-box')
    let isModalClicked = false

    const setImageBG = (src, color) => {
        image.src = src
        image.style.background = color
    }

    const setIcon = () => isModalClicked ? setImageBG('./public/xmark-solid.svg', '#268DCE')
    : setImageBG('./public/hamburger.svg', 'transparent')

    setIcon()

    hamburger.addEventListener('click', () => {
        isModalClicked = !isModalClicked
        setIcon()

        if (isModalClicked)
            return modal.classList.remove('hidden')
        return modal.classList.add('hidden')
    })
</script>
<style>
    header {
        display: grid;
        grid-template-columns: repeat(3, minmax(100px, 1fr));
        align-items: center;
        background-color: var(--lightblack);
        box-shadow: var(--shadow);
    }
    .logo {
        justify-self: start;
        padding-left: var(--gapping);
        color: var(--white);
        cursor: pointer;
    }
    h3 {
        color: var(--secondary);
        font-size: calc(var(--headings)*0.4);
    }
    .hamburger {
        justify-self: end;
        padding-right: var(--gapping);
    }
    .modal {
        position: relative;
    }
    .modal > div {
        position: absolute;
        z-index: 50;
        right: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        
        gap: var(--gapping);
        background-color: var(--lightblack);
        border-radius: var(--round);
        width: max-content;
        padding: var(--gapping);
    }

    .dashboard {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: var(--gapping);
    }
    .dashboard > div {
        background-color: var(--white);
        border-radius: 1000px;
        padding: calc(var(--gapping)*0.4) calc(var(--gapping)*0.5);
    }
    a {
        align-self: center;
        width: max-content;
    }
</style>