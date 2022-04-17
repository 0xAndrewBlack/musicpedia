<?php
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/styles/profile.css"/>
</head>
<body>
<!-- Menü -->
<?php include './includes/navigation.php'; ?>
<!-- Minden szar -->
<main class="kontener">
    <h1><?php echo $user->getLastname(); ?><?php echo $user->getFirstname(); ?></h1>

    <img id="pfp" src="assets/public/user-pfps/<?php echo $user->getPfp(); ?>" alt="Profilkép">


    <div id="infos">
        <table id="profile">
            <tr>
                <th>E-mail cím</th>
                <td><?php echo $user->getEmail(); ?></td>
            </tr>
            <tr>
                <th>Születési dátum</th>
                <td><?php echo $user->getBirthdate(); ?></td>
            </tr>
            <tr>
                <th>Regisztráció dátuma</th>
                <td><?php echo $user->getRegDate(); ?></td>
            </tr>
            <tr>
                <th>Magamról</th>
                <td><?php echo $user->getAbout(); ?></td>
            </tr>
        </table>
        <h3>Kedvenceim</h3>

        <?php
        $idd = $user->getId();
        $sql = "SELECT favorites FROM users WHERE id='$idd';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table class='singers'><tr><th id='singer-name'>Előadó</th><th id='singer-pfp'>Kép</th></tr>";
            $row = $result->fetch_assoc();
            $kedvencek = $row["favorites"];
            $kedvencek_split = explode(",", $kedvencek);
            for ($i = 0; $i < count($kedvencek_split); $i++) {
                if (strcmp($kedvencek_split[$i], NULL) == 0) {


                } else {
                    $kep = $kedvencek_split[$i] . ".png";
                    echo "<tr>
                <td headers='user-id'>" . $kedvencek_split[$i] . "</td>
                <td headers='user-pfp'><img src='assets/resources/eloadok/" . $kep . "' alt='előadó profilkepe' /></td>
            </tr>";
                }
            }
            echo "</table>";
        } else {
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="urlap">
        <?php
        include("./includes/connection.php");
        if (isset($_POST["modify"])) {
            $newPassword = $_POST["password"];
            $password_hashed = password_hash($newPassword, PASSWORD_DEFAULT);
            $idd = $user->getId();
            $sql = "UPDATE users SET password='$password_hashed' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
                $user->setPswd($newPassword);
            } else {
            }

        }
        if (isset($_POST["modifyemail"])) {
            $newemail = $_POST["email"];
            $idd = $user->getId();
            $sql = "UPDATE users SET email='$newemail' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
                $user->setEmail($newemail);
            } else {
            }

        }
        if (isset($_POST["modifyabout"])) {
            $newabout = $_POST["about"];
            $idd = $user->getId();
            $sql = "UPDATE users SET about='$newabout' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
                $user->setAbout($newabout);
            } else {
            }

        }
        if (isset($_POST["modifypicture"])) {
            $newpicture = $_FILES["picture"]["name"];
            $idd = $user->getId();
            $sql = "UPDATE users SET pfp='$newpicture' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
                $user->setPfp($newpicture);
                $kiterjesztesek = ["jpg", "jpeg", "png"];
                $kiterjesztes = strtolower(pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION));
                if (in_array($kiterjesztes, $kiterjesztesek)) {
                    $cel_utvonal = "assets/public/user-pfps/" . $_FILES["picture"]["name"];
                    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $cel_utvonal)) {
                    } else {
                    }
                } else {
                }
            }

        }
        if (isset($_POST["deleteverything"])) {
            $idd = $user->getId();
            $sql = "DELETE FROM users WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
                $user = null;
                header("location: logout.php");
            } else {
            }

        }
        if (isset($_POST["mindent"])) {
            $egy = 1;
            $idd = $user->getId();
            $sql = "UPDATE users SET privacy='$egy' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
            } else {
            }

        }
        if (isset($_POST["semmit"])) {
            $nulla = 0;
            $idd = $user->getId();
            $sql = "UPDATE users SET privacy='$nulla' WHERE id='$idd'";
            if ($conn->query($sql) === TRUE) {
            } else {
            }

        }
        ?>
    </div>
    <form method="POST" autocomplete="off" enctype="multipart/form-data">
        <p class="auth-header">Módosítgatttál (eddig)</p>

        <label for="password">Adj meg egy új jelszót.</label> <br/>
        <input type="password" name="password" id="password" minlength="8" maxlength="32"/> <br/>
        <input type="submit" name="modify" value="Módosít"/>
        <br>
        <label for="email">Adj meg egy új emailt.</label> <br/>
        <input type="text" name="email" id="email"/> <br/>
        <input type="submit" name="modifyemail" value="Módosít"/>
        <br>
        <label for="about">Írj egy új magamrólt.</label> <br/>
        <input type="text" name="about" id="about"/> <br/>
        <input type="submit" name="modifyabout" value="Módosít"/>
        <br>
        <label for="about">Tölts fel egy új képet.</label> <br/>
        <input type="file" name="picture" id="about" accept="image/*"/> <br/>
        <input type="submit" name="modifypicture" value="Feltöltés"/>
        <br>
        <label for="about">Töröld a teljes profilod.</label> <br/>
        <input type="submit" name="deleteverything" value="Törlés"/>
        <br>
        <label for="about">Láthatóság.</label> <br/>
        <input type="submit" name="mindent" value="Mindent vagy semmit"/>
        <input type="submit" name="semmit" value="Kevesebb néha több"/>


    </form>
    </div>
</main>
<!-- Lábjegyzet vagy mi -->
<?php include './includes/footer.php'; ?>
<!-- Szkriptek -->
<?php include './includes/scripts_main.php'; ?>
</body>
</html>