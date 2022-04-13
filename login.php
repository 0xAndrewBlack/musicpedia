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
		<!-- Minden -->
		<main class="kontener">
			<div class="urlap">
			<?php
					include("./includes/connection.php");

					if (isset($_POST["login"])) {
						$email = $_POST["mail"];

						$password = $_POST["password"];

						if ($stmt = $conn->prepare("SELECT id, password, firstname, CONCAT(firstname, ' ', lastname) AS name FROM users WHERE email = ?")) {
							$stmt->bind_param('s', $email);
							$stmt->execute();
							$stmt->store_result();

							if ($stmt->num_rows > 0) {
								$stmt->bind_result($id, $password_stored, $firstname, $name);
								$stmt->fetch();

								if (password_verify($password, $password_stored)) {
									$lifetime = 3600;
									session_start();

									$_SESSION['loggedin'] = TRUE;
									$_SESSION['firstname'] = $firstname;
									$_SESSION['name'] = $name;
									$_SESSION['id'] = $id;

									setcookie(session_name(), session_id(), time()+$lifetime);
									session_regenerate_id();

									echo '<div class="alert alert-success">Sikeres bejelentkezés.</div>';
									echo '<div class="alert alert-info">Üdv, ' . $_SESSION['firstname'] . '!' . '</div>';

									usleep(2000);
									header("Location: index.php");
								} else {
									echo '<div class="alert alert-warning">Rossz jelszó!</div>';
								}
							} else {
								echo '<div class="alert alert-error">Hibás e-mail cím/jelszó páros!</div>';
							}

							$stmt->close();
						}
					}
				?>
				<form class="auth-urlap" name="bejelentkezes" action="login.php" method="POST" autocomplete="off">
					<p class="auth-header">Bejelentkezés</p>
					<fieldset>
						<legend>Belépési adatok</legend>
						<label for="mail">E-Mail cím <span class="kellbmeg">*</span></label> <br />
						<input type="email" name="mail" id="mail" required /><br />

						<label for="password">Jelszó <span class="kellbmeg">*</span></label> <br />
						<input type="password" name="password" id="password" minlength="8" maxlength="32" required /> <br />
					</fieldset>
					<div class="btn-group">
						<input type="reset" class="auth-reset" name="reset" value="Törlés" />
						<input type="submit" class="auth-kuldes" name="login" value="Bejelentkezés" />
					</div>
				</form>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include './includes/footer.php'; ?>
	</body>
</html>
