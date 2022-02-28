<nav id='js-nav'>
    <div id='js-pointer' class='nav__pointer'></div>
    <ul class='nav__list'>
        <li><a href='index.php' id='/php-finals/index.php'>Home</a></li>
        <li><a href='About.php' id='/php-finals/About.php'>About</a></li>
        <li><a href='Lorem.php' id='/php-finals/Lorem.php'>Lorem</a></li>
    </ul>
    <script>
        const padding = "0.5em"
        const root = "/php-finals"
        const secondary = "#268DCE"

        const nav = document.querySelector("#js-nav")
        const pointer = document.querySelector("#js-pointer")
        const links = document.querySelectorAll("a")

        pointer.style.width = "calc(100% /"+links.length+" - "+padding+")"

        if (location.pathname === root+'/' || location.pathname === root+'/index.php') {
            document.getElementById(root+'/index.php').style.color = secondary
            pointer.style.transform = "translate3d(0,0,0)"
        }
        else if (location.pathname === root+'/About.php'){
            document.getElementById(location.pathname).style.color = secondary
            pointer.style.transform = "translate3d(100%,0,0)"
        }
        else {
            document.getElementById(location.pathname).style.color = secondary
            pointer.style.transform = "translate3d(200%,0,0)"
        }

    </script>
</nav>
<style>
    nav {
        position: relative;
        padding: 1em;
        text-align: center;
    }

    nav ul {
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

    .nav__pointer {
        z-index: 1;
        position: absolute;
        top: var(--gapping);
        background-color: #5593da;
        height: 0.2em;
        transition: transform 0.25s ease-in-out;
        border-radius: 0.2em;
    }

    .nav__list {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
</style>