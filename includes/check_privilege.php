<?php

    if (!$_SESSION['isadmin']) {
        header("location: ../index.php");
    }

?>