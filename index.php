<?php
include("./includes/connection.php");
include './includes/check_auth.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/styles/index.css"/>
</head>
<body>
<!-- Menü -->
<?php include './includes/navigation.php'; ?>
<!-- Minden szar -->
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
<?php include './includes/footer.php'; ?>
<!-- Szkriptek -->

</body>
</html>
