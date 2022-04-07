<!DOCTYPE html>
<html lang="hu">
	<head>
		<?php include '../includes/head_admin.php'; ?>
	</head>
	<body>
		<!-- Menü -->
		<?php include '../includes/navigation_admin.php'; ?>
		<!-- Minden szar -->
		<main class="kontener">
			<header>
				<h1 class="header-felhasznalok">Felhasználók</h1>
				<p>Jelenlegi felhasználók.</p>
			</header>
			<div class="wrapper">
				<table class="felhasznalok">
					<tr>
						<th id="felhasznalo-profilkep">Profilkép</th>
						<th id="felhasznalo-nev">Név</th>
						<th id="felhasznalo-email">E-Mail cím</th>
						<th id="felhasznalo-szuletese">Születési idő</th>
					</tr>
					<tr>
						<td headers="felhasznalo-profilkep"><img class="user-avatar" alt="Felhasználó profilképe" src="../assets/resources/user-pfps/default.png" /></td>
						<td headers="felhasznalo-nev">John Doe</td>
						<td headers="felhasznalo-email">user@domain.tld</td>
						<td headers="felhasznalo-szuletese">2022.04.06</td>
					</tr>
				</table>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include '../includes/footer.php'; ?>
		<!-- Szkriptek -->
		<?php include '../includes/scripts_main.php'; ?>
	</body>
</html>
