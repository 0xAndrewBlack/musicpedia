<?php

include("./includes/connection.php");
include './includes/check_auth.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"/>
    <title>Musicpedia</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="a gyász meg a szhenvedés"/>
    <meta name="keywords" content="Rostás Szabika, Te vagy a tavasz, Függőséget okoztál, Csepereg az eső"/>
    <link rel="icon" href="./assets/resources/logo.png"/>
    <link rel="stylesheet" href="./assets/styles/main.css"/>
    <link rel="stylesheet" href="assets/styles/userlist.css"/>
</head>
<body>
<!-- Menü -->
<?php include './includes/navigation.php'; ?>
<!-- Minden szar -->
<main class="kontener">

    <?php
    $sql = "SELECT id, email, pfp, about, favorites, privacy, CONCAT(firstname, ' ', lastname) AS name, birthdate FROM users;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $path = "assets/public/user-pfps/" . $row['pfp'];
            $Profilkép = "profilkep";
            if ($row['privacy'] == 1) {
                echo "<div class='user'>
                <img class='pfp' src=" . $path . " alt=" . $Profilkép . ">
                <div class='in'>
                 <p class='name'>" . $row['name'] . "</p>
                 <p>" . $row['id'] . "</p>
                 <p>" . $row['email'] . "</p>
                 <p>" . $row['about'] . "</p>
          </div>       
        </div>
								";
            } else {
                echo "<div class='user'>
                <img class='pfp' src=" . $path . " alt=" . $Profilkép . ">
                <div class='in'>
                <p class='name'>" . $row['name'] . "</p>
                <p>" . $row['about'] . "</p>
                 </div>
                 </div>";
            }
        }

    }
    $conn->close();
    ?>

</main>
<!-- Lábjegyzet vagy mi -->
<?php include './includes/footer.php'; ?>
<!-- Szkriptek -->
<?php include './includes/scripts_main.php'; ?>
</body>
</html>

