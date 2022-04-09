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

					if (isset($_POST["register"])) {
						$email = $_POST["mail"];
						$firstname = $_POST["keresztnev"];
						$lastname = $_POST["vezeteknev"];
						$birthdate = $_POST["szuldatum"];

						$password = $_POST["password"];
						$password_confirm = $_POST["confirmpassword"];

						$password_hashed = password_hash($password, PASSWORD_DEFAULT);
						$regdate = date("Y-m-d H:i:s"); // 2022-04-08 16:12:36

						if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE email = ?')) {
							$stmt->bind_param('s', $email);
							$stmt->execute();
							$stmt->store_result();

							if ($stmt->num_rows > 0) {
								echo 'User exists, please choose another!';
							} else {
								// Insert new account
								if ($stmt = $conn->prepare("INSERT INTO users (registration_date, email, password, firstname, lastname, birthdate) VALUES (?, ?, ?, ?, ?, ?)")) {
									$password = $password_hashed;
									$stmt->bind_param("ssssss", $regdate, $email, $password, $firstname, $lastname, $birthdate);
									$stmt->execute();
									echo 'You have successfully registered, you can now login!';
								} else {
									echo 'Could not prepare statement!';
								}
							}
							$stmt->close();
						} else {
							echo 'Could not prepare statement!';
						}
					}
				?>
				<form class="auth-urlap" name="regisztracio" action="register.php" method="POST" autocomplete="off">
					<p class="auth-header">Regisztráció</p>
					<fieldset>
						<legend>Személyes adatok</legend>
						<label for="mail">E-Mail cím <span class="kellbmeg">*</span></label> <br />
						<input type="email" name="mail" id="mail" required /><br />

						<label for="keresztnev">Keresztnév <span class="kellbmeg">*</span></label> <br />
						<input type="text" name="keresztnev" id="keresztnev" required /><br />
						<label for="vezeteknev">Vezetéknév <span class="kellbmeg">*</span></label> <br />
						<input type="text" name="vezeteknev" id="vezeteknev" required /><br />

						<label for="szuldatum">Születési dátum </label> <br />
						<input type="date" name="szuldatum" id="szuldatum" /><br />
					</fieldset>
					<fieldset>
						<legend>Jelszó biztonság</legend>
							<label for="password">Jelszó <span class="kellbmeg">*</span></label> <br />
							<input type="password" name="password" id="password" minlength="8" maxlength="32" required/> <br />

							<label for="confirmpassword">Jelszó megerősítése <span class="kellbmeg">*</span></label> <br />
							<input type="password" name="confirmpassword" id="confirmpassword" minlength="8" maxlength="32" required/> <br />
					</fieldset>
					<div class="btn-group">
						<input type="reset" class="auth-reset" name="reset" value="Törlés" />
						<input type="submit" class="auth-kuldes" name="register" value="Regisztráció" />
					</div>
				</form>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include './includes/footer.php'; ?>
	</body>
</html>