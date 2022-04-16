<?php
include './includes/check_auth.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <?php include './includes/head_auth.php'; ?>
</head>
<body>
<!-- Menü -->
<?php include './includes/navigation.php'; ?>
<!-- Minden szar -->
<main class="kontener">
    <header>
        <h1 class="header-felhasznalok">Üzeneteid</h1>
        <p>Összes elküldött üzeneted.</p>
    </header>
    <div class="wrapper">
        <!-- Üzenetek -->
        <?php

        include("./includes/connection.php");

        $sql = 'SELECT recipient AS id, message FROM messages WHERE sender = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_SESSION["id"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table class='messages-showcase'><tr><th id='messages-to'>Címzett</th><th id='messages-message'>Üzenet</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td headers='messages-to'>" . $row["id"] . "</td>
                            <td headers='messages-message'>". $row["message"] . "</td>
                        </tr>";
            }

            echo "</table>";
        } else {
            echo "";
        }

        $conn->close();

        ?>
        <?php
            include("./includes/messages.php");
        ?>
    </div>
</main>
<!-- Lábjegyzet vagy mi -->
<?php include './includes/footer.php'; ?>
<!-- Szkriptek -->
<?php include './includes/scripts_main.php'; ?>
</body>
</html>
