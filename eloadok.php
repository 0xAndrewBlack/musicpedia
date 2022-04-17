<?php
    include './includes/check_auth.php';
?>

<!DOCTYPE html>
<html lang="hu">
	<head>
		<?php include './includes/head_eloadok.php'; ?>
	</head>
	<body>
		<!-- Menü -->
		<?php include './includes/navigation.php'; ?>
		<!-- Minden szar -->
		<main class="kontener">
			<header>
				<h1 class="header-eloadok">Előadók</h1>
				<p>Jelenglegi elérhető előadóink.</p>
			</header>
			<div class="wrapper">
				<table class="eloadok">
					<tr>
						<th id="eloado-profilkep">Kép</th>
						<th id="eloado-nev">Előadó</th>
						<th id="eloado-szamai">Zenék száma</th>
					</tr>
					<tr>
						<td headers="eloado-profilkep"><img class="eloado-avatar" alt="Bitto Duo előadó avatár" src="./assets/resources/eloadok/bittoduo.png" /></td>
						<td headers="eloado-nev"><a href="eloado_bittoduo.php" class="eloado-link">Bittoduo</a></td>
						<td headers="eloado-szamai">12</td>
					</tr>
					<tr>
						<td headers="eloado-profilkep"><img class="eloado-avatar" alt="Dua Lipa előadó avatár" src="./assets/resources/eloadok/dualipa.png" /></td>
						<td headers="eloado-nev"><a href="eloado_dualipa.php" class="eloado-link">Dua Lipa</a></td>
						<td headers="eloado-szamai">30</td>
					</tr>
					<tr>
						<td headers="eloado-profilkep"><img class="eloado-avatar" alt="Drake előadó avatár" src="./assets/resources/eloadok/drake.png" /></td>
						<td headers="eloado-nev"><a href="eloado_drake.php" class="eloado-link">Drake</a></td>
						<td headers="eloado-szamai">139</td>
					</tr>
					<tr>
						<td headers="eloado-profilkep"><img class="eloado-avatar" alt="Rostás Szabika előadó avatár" src="./assets/resources/eloadok/rostas.png" /></td>
						<td headers="eloado-nev"><a href="eloado_rostas.php" class="eloado-link">Rostás Szabika</a></td>
						<td headers="eloado-szamai">4</td>
					</tr>
					<tr>
						<td headers="eloado-profilkep"><img class="eloado-avatar" alt="Mc Hawer és Teknő előadó avatár" src="./assets/resources/eloadok/mchawerestekno.png" /></td>
						<td headers="eloado-nev"><a href="eloado_mchet.php" class="eloado-link">MC Hawer & Teknő</a></td>
						<td headers="eloado-szamai">32</td>
					</tr>
				</table>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include './includes/footer.php'; ?>
		<!-- Szkriptek -->
		<?php include './includes/scripts_main.php'; ?>
	</body>
</html>
