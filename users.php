<?php
	include './includes/check_auth.php';
?>

<!DOCTYPE html>
<html lang="hu">
	<head>
		<?php include './includes/head.php'; ?>
	</head>
	<body>
		<!-- Menü -->
		<?php include './includes/navigation.php'; ?>
		<!-- Minden szar -->
		<main class="kontener">
			<header>
				<h1 class="header-felhasznalok">Felhasználók</h1>
				<p>Elérhető felhasználók.</p>
			</header>
			<div class="wrapper">
				<?php
					include("./includes/connection.php");

					$sql = "SELECT id, email, pfp, CONCAT(firstname, ' ', lastname) AS name FROM users;";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table class='admin'><tr><th id='user-id'>Azonosító</th><th id='user-pfp'>Kép</th><th id='user-email'>E-Mail</th><th id='user-name'>Név</th></tr>";

						while($row = $result->fetch_assoc()) {
							echo "<tr>
								<td headers='user-id'>" . $row["id"] . "</td>
								<td headers='user-pfp'><img class='felhasznalo-avatar' src='./assets/public/user-pfps/" . $row["pfp"] . "' alt='felhasznalo profilkepe' /></td>
								<td headers='user-email'>" . $row["email"] . "</td>
								<td headers='user-name'>" . $row["name"] . "</td>
								</tr>";
						}

						echo "</table>";
					} else {
						echo "null";
					}

					$conn->close();
				?>
			</div>
		</main>
		<!-- Lábjegyzet vagy mi -->
		<?php include './includes/footer.php'; ?>
		<!-- Szkriptek -->
		<?php include './includes/scripts_main.php'; ?>
	</body>
</html>
