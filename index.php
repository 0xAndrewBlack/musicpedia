<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Musicpedia</title>
    <meta name="author" content="a gyász meg a szhenvedés"/>
    <meta name="keywords" content="Musicpedia, zene, dalszöveg, lyrics, video, zenés video"/>
    <link rel="icon" href="assets/resources/logo.png"/>
    <link rel="stylesheet" href="assets/styles/index.css"/>
    <link rel="stylesheet" href="./assets/styles/main.css"/>
    <link rel="stylesheet" href="./assets/styles/animaciok.css"/>
</head>
<body>
<!-- Menü -->
<nav class="navigacio">
    <ul id="menu">
        <li class="menuElemek">
            <img id="logo" alt="Musicpedia logo" src="./assets/resources/logo.png" height="60" draggable="false"/>
        </li>
        <li class="menuElemek"><a href="./index.php" class="active">Főoldal</a></li>
        <li class="menuElemek"><a href="./eloadok.php">Előadók</a></li>
        <li class="menuElemek dropdown">
            <a id="profilom" href="javascript:void(0)" class="dropbtn">Profilom</a>
            <div class="dropdown-content"><!-- Ide betöltődik majd a navigáció --></div>
        </li>
    </ul>
</nav>
<!--home-->
<main class="kontener">
    <ul id="welcome">
        <li><img id="slogen" alt="slogen" src="./assets/resources/logoesnev.png"/></li>
    </ul>

    <table>
        <caption>WEEKLY TOP5 LEGHOTTABB ZENE</caption>
        <tr>
            <th>No.</th>
            <th>ELŐADÓ</th>
            <th>ZENESZÁM</th>
        </tr>
        <tr>
            <td>#1</td>
            <td>BITTÓ DUÓ</td>
            <td>HAJNALBA MEGYEK MEGINT HAZA</td>
        </tr>
        <tr>
            <td>#2</td>
            <td>Rostás Szabika</td>
            <td>Nincs már divatban</td>
        </tr>
        <tr>
            <td>#3</td>
            <td>Drake</td>
            <td>God's Plan</td>
        </tr>
        <tr>
            <td>#4</td>
            <td>MC Hawer & Tekknő</td>
            <td>Bye Bye lány</td>
        </tr>
        <tr>
            <td>#5</td>
            <td>Dua Lipa</td>
            <td>Break My Heart</td>
        </tr>
    </table>

    <div class="flex-container">
        <div><img class="miniz" alt="hirdetes" src="./assets/resources/hirdetes1.png"></div>
        <div><img class="miniz" alt="hirdetes" src="./assets/resources/hirdetes2.png"></div>
    </div>
</main>

<!-- Lábjegyzet vagy mi -->
<footer>
    <p>Musicpedia &copy; 2022</p>
</footer>
<!-- Szkriptek -->
<script src="./assets/scripts/auth.check.js" defer></script>

</body>
</html>
