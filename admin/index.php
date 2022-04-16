<?php
	include '../includes/check_auth.php';
	include '../includes/check_privilege.php';
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
				<h1 class="header-felhasznalok">Admin felület</h1>
				<p>Statisztika az oldalról.</p>
			</header>
			<div class="wrapper">
				<!-- Statisztikák -->
				<?php
					include("../includes/connection.php");

					$sql = "SELECT ( SELECT COUNT(id) FROM users WHERE privilege_level = 0 ) AS felhasznalok, ( SELECT COUNT(id) FROM messages ) AS uzenetek, ( SELECT COUNT(id) FROM users WHERE privilege_level = 1 ) AS eloadok, ( SELECT COUNT(id) FROM users WHERE privilege_level = 10 ) AS admins;";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table class='admin'><tr><th>Felhasználók</th><th>Üzenetek</th><th>Előadók</th><th>Adminok</th></tr>";

						while($row = $result->fetch_assoc()) {
							echo "<tr>
								<td>" . $row["felhasznalok"] . "</td>
								<td>" . $row["uzenetek"] . "</td>
								<td>" . $row["eloadok"] . "</td>
								<td>" . $row["admins"] . "</td>
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
