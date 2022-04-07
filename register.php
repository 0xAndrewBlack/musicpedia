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
				<form class="auth-urlap" name="regisztracio" autocomplete="off">
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
						<input type="reset" class="auth-reset" value="Törlés" />
						<input type="submit" class="auth-kuldes" onclick="register(event)" value="Regisztráció" />
					</div>
				</form>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include './includes/footer.php'; ?>
		<!-- Szkriptek -->
		<?php include './includes/scripts_auth.php'; ?>
	</body>
</html>