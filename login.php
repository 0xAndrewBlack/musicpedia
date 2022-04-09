<!DOCTYPE html>
<html lang="hu">
	<head>
		<?php include './includes/head_auth.php'; ?>
	</head>
	<body>
		<!-- Menü -->
		<nav class="navigacio">
			<ul id="menu">
				<li class="menuElemek">
					<img id="logo" alt="Musicpedia logo" src="./assets/resources/logo.png" height="60" draggable="false" />
				</li>
				<li class="menuElemek"><a href="./index.html">Főoldal</a></li>
				<li class="menuElemek"><a href="./eloadok.html">Előadók</a></li>
				<li class="menuElemek dropdown">
					<a id="profilom" href="javascript:void(0)" class="dropbtn">Profilom</a>
					<div class="dropdown-content"><!-- Ide betöltődik majd a navigáció --></div>
				</li>
			</ul>
		</nav>
		<!-- Minden -->
		<main class="kontener">
			<div class="urlap">
			<?php
					include("./includes/connection.php");

					if (isset($_POST["login"])) {
						$email = $_POST["mail"];

						$password = $_POST["password"];

						if ($stmt = $conn->prepare("SELECT id, password, CONCAT(firstname, ' ', lastname) AS name FROM users WHERE email = ?")) {
							$stmt->bind_param('s', $email);
							$stmt->execute();
							$stmt->store_result();

							if ($stmt->num_rows > 0) {
								$stmt->bind_result($id, $password_stored, $name);
								$stmt->fetch();

								if (password_verify($password, $password_stored)) {
									$lifetime = 3600;
									session_start();

									$_SESSION['loggedin'] = TRUE;
									$_SESSION['name'] = $name;
									$_SESSION['id'] = $id;

									setcookie(session_name(), session_id(), time()+$lifetime);
									session_regenerate_id();

									echo 'Welcome ' . $_SESSION['name'] . '!';
								} else {
									// Incorrect password
									echo 'Incorrect email and/or password!';
								}
							} else {
								// Incorrect username
								echo 'Incorrect email and/or password!';
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
