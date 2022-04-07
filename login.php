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
				<form class="auth-urlap" name="bejelentkezes" autocomplete="off">
					<p class="auth-header">Bejelentkezés</p>
					<fieldset>
						<legend>Belépési adatok</legend>
						<label for="mail">E-Mail cím <span class="kellbmeg">*</span></label> <br />
						<input type="email" name="mail" id="mail" required /><br />

						<label for="password">Jelszó <span class="kellbmeg">*</span></label> <br />
						<input type="password" name="password" id="password" minlength="8" maxlength="32" required /> <br />
					</fieldset>
					<div class="btn-group">
						<input type="reset" class="auth-reset" value="Törlés" />
						<input type="submit" class="auth-kuldes" onclick="login(event)" value="Bejelentkezés" />
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
