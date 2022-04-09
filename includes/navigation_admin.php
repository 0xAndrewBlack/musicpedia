<nav class="navigacio">
    <ul id="menu">
        <li class="menuElemek">
            <img id="logo" alt="Musicpedia logo" src="../assets/resources/logo.png" height="60" draggable="false"/>
        </li>
        <li class="menuElemek"><a href="../index.php">Vissza a főoldalra</a></li>
        <li class="menuElemek"><a href="./index.php" class="<?php echo (strpos($_SERVER['REQUEST_URI'], '/index.php')) ? 'active':'' ?>">Statisztika</a></li>
        <li class="menuElemek"><a href="./users.php" class="<?php echo (strpos($_SERVER['REQUEST_URI'], '/users.php')) ? 'active':'' ?>">Felhasználók</a></li>
        <li class="menuElemek dropdown">
            <a id="profilom" href="javascript:void(0)" class="dropbtn">Profilom</a>
            <div class="dropdown-content"><!-- Ide betöltődik majd a navigáció --></div>
        </li>
    </ul>
</nav>