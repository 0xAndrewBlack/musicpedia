<?php
	include '../includes/check_auth.php';
?>

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
				<?php
					include("../includes/connection.php");

					$sql = "SELECT id, email, CONCAT(firstname, ' ', lastname) AS name, birthdate FROM users;";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table class='admin'><tr><th>ID</th><th>E-Mail</th><th>Name</th><th>Birthdate</th></tr>";

						while($row = $result->fetch_assoc()) {
							echo "<tr>
								<td>" . $row["id"] . "</td>
								<td>" . $row["email"] . "</td>
								<td>" . $row["name"] . "</td>
								<td>" . $row["birthdate"] . "</td>
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
		<?php include '../includes/footer.php'; ?>
		<!-- Szkriptek -->
		<?php include '../includes/scripts_main.php'; ?>
	</body>
</html>
