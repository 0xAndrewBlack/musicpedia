<?php
    echo $_SESSION['isadmin'];

    if (!$_SESSION['isadmin']) {
        header("location: ../index.php");
    }

?>