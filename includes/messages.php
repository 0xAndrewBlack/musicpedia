<?php

    include("connection.php");

    $sql = 'SELECT (SELECT COUNT(id) FROM messages WHERE recipient = ?) AS bejovo, (SELECT COUNT(id) FROM messages WHERE sender = ?) AS elkuldott;';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $_SESSION["id"], $_SESSION["id"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table class='messages'><tr><th id='messages-bejovo'><a href='./messages_inbox.php'>Bejövő üzenetek</a></th><th id='messages-elkuldott'><a href='./messages_outbox.php'>Elküldött üzenetek</a></th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                                        <td headers='messages-bejovo'>" . $row["bejovo"] . " db</td>
                                        <td headers='messages-elkuldott'>". $row["elkuldott"] . " db</td>
                                        </tr>";
        }

        echo "</table>";
    } else {
        echo "";
    }

    $conn->close();

?>