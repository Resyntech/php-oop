<?php
    if(isset($_SESSION["userid"])) {
        echo "<nav>
            <ul>
                <li>
                    <a href='./index.php'>Home</a>
                </li>
                <li>
                    <a href='#'>" . $_SESSION["useruid"] . "</a>
                </li>
                <li>
                    <a href='./php/class/signout.php'>Sign Out</a>
                </li>
                <span class='indicator'></span>
            </ul>
        </nav>";
    } else {
        echo "<nav>
            <ul>
                <li>
                    <a href='./index.php'>Home</a>
                </li>
                <li>
                    <a href='./Signin.php'>Sign In</a>
                </li>
                <li>
                    <a href='./Signup.php'>Sign Up</a>
                </li>
                <span class='indicator'></span>
            </ul>
        </nav>";
    }
?>
<style>
    nav {
        box-shadow: var(--shadow);
    }

    nav ul {
        background-color: var(--lightblack);
        padding: var(--gapping);
        gap: var(--gapping);
    }

    nav ul li {
        list-style-type: none;
    }

    nav ul li a {
        text-decoration: none;
        font-size: var(--gapping);
        width: fit-content;
        color: var(--white);
    }

    nav ul li a:hover {
        color: var(--secondary);
    }

    nav ul, section, section form {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>