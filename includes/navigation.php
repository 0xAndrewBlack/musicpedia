<nav class="navigacio">
    <ul id="menu">
        <li class="menuElemek">
            <img id="logo" alt="Musicpedia logo" src="./assets/resources/logo.png" height="60" draggable="false"/>
        </li>
        <li class="menuElemek"><a href="./index.php"
                                  class="<?php echo ($_SERVER['REQUEST_URI'] == '/index.php') ? 'active' : '' ?>">Főoldal</a>
        </li>
        <li class="menuElemek"><a href="./eloadok.php"
                                  class="<?php echo ($_SERVER['REQUEST_URI'] == '/eloadok.php') ? 'active' : '' ?>">Előadók</a>
        </li>
        </li>
        <li class="menuElemek"><a href="./userlist.php"
                                  class="<?php echo ($_SERVER['REQUEST_URI'] == '/eloadok.php') ? 'active' : '' ?>">Felhasználók</a>
        </li>
        <li class="menuElemek dropdown">
            <a id="profilom" href="javascript:void(0)" class="dropbtn">Profilom</a>
            <div class="dropdown-content">
                <?php
                if (!isset($_SESSION["loggedin"])) { ?>
                    <a href="./login.php">Bejelentkezés</a>
                    <a href="./register.php">Regisztráció</a>
                <?php } else { ?>
                    <?php if ($_SESSION["isadmin"]) { ?>
                        <a href="./admin/index.php">Admin Felület</a>
                    <?php } ?>
                    <a href="./profile.php">Profil</a>
                    <a href="./messages.php">Üzenetek</a>
                    <a href="./logout.php">Kijelentkezés</a>
                <?php }
                ?>
            </div>
        </li>
    </ul>
</nav>