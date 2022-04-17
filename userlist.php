<?php

include("./includes/connection.php");

$sql = "SELECT id, email, pfp, about, favorites, privacy, CONCAT(firstname, ' ', lastname) AS name, birthdate FROM users;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $path="./assets/resources/".$row['pfp'];
        $Profilkép="profilkep";
        if ($row['privacy'] == 1) {
            echo "<div>
                 <p>" . $row['name'] . "</p>
                 <p>" . $row['id'] . "</p>
                 <p>" . $row['email'] . "</p>
                <img src=".$path." alt=".$Profilkép.">
                 <p>" . $row['about'] . "</p>  
        </div>
								";
        }else{
            echo "<div>
                <p>" . $row['name'] . "</p>
                <p>" . $row['about'] . "</p>
                 </div>";
        }
    }

}
$conn->close();

?>