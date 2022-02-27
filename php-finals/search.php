<?php
    if(isset($_POST['search'])) {
        $search = $_POST['search'];

        if(strlen(($search > 2)))
            echo $search;
    }
?>