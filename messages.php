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
                <p>
                    Az elérhető felhasználók listáját az "Elérhető felhasználók" gombra kattintva tekintheted meg.
                </p>
            </header>
            <div class="wrapper">
                <!-- Üzenetek -->
                <?php
                    include("./includes/messages.php");
                ?>
                <!-- Üzenet küldése -->
                <div class="urlap">
                    <a href="./users.php" class="button button-info">Elérhető felhasználók</a>
                    <?php
                    include("./includes/connection.php");

                        if (isset($_POST["sendmsg"])) {
                            $sender = $_SESSION["id"];
                            $to = $_POST["mail"];
                            $recipient = $to;
                            $uzenet = $_POST["uzenet"];
                            $time = date("Y-m-d H:i:s"); // 2022-04-08 17:02:10

                            if (!($to || $uzenet)) {
                                echo '<div class="alert alert-warning">Üres mezők, töltsd ki a teljes űrlapot.</div>';
                                return;
                            }

                            if ($stmt = $conn->prepare('SELECT id FROM users WHERE id = ?')) {
                                $stmt->bind_param('s', $to);
                                $stmt->execute();
                                $stmt->store_result();

                                if ($stmt->num_rows > 0) {
                                    // Insert new message
                                    if ($stmt = $conn->prepare("INSERT INTO messages (time, sender, recipient, message) VALUES (?, ?, ?, ?)")) {
                                        $stmt->bind_param("ssss", $time, $sender, $recipient, $uzenet);
                                        $stmt->execute();

                                        echo '<div class="alert alert-success">Üzenet elküldve.</div>';

                                        usleep(2000);
                                        header("Location: messages.php");
                                    } else {
                                        echo '<div class="alert alert-error">Sikertelen üzenet küldés, adatbázis kapcsolat hiba.</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-warning">A felhasználó nem létezik.</div>';
                                }

                                $stmt->close();
                            } else {
                                echo '<div class="alert alert-error">Sikertelen üzenet küldés, adatbázis kapcsolat hiba.</div>';
                            }
                        }
                    ?>
                    <form class="auth-urlap" name="send-messages" action="messages.php" method="POST" autocomplete="off">
                        <p class="auth-header">Üzenet küldés</p>
                        <fieldset>
                            <legend>Címzett</legend>
                            <label for="mail">Címzett azonosítója<span class="kellbmeg">*</span></label> <br />
                            <input type="text" name="mail" id="mail" required /><br />

                            <label for="uzenet">Üzenet <span class="kellbmeg">*</span></label> <br />
                            <input type="text" name="uzenet" id="uzenet" required /><br />

                        </fieldset>
                        <div class="btn-group">
                            <input type="reset" class="auth-reset" name="reset" value="Törlés" />
                            <input type="submit" class="auth-kuldes" name="sendmsg" value="Küldés" />
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- Lábjegyzet vagy mi -->
        <?php include './includes/footer.php'; ?>
        <!-- Szkriptek -->
        <?php include './includes/scripts_main.php'; ?>
    </body>
</html>
