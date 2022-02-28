<?php
function SEO($title, $description) {
    echo "<head>
        <title>PHP Finals | " . $title . "</title>
        <meta charset='utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <meta name='description' content='" . $description . "' />
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <link rel='stylesheet' href='./dist/global-style.css' />
    </head>";
}
?>