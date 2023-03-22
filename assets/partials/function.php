<?php
function getEvents($conn) {
    $sql = "SELECT * FROM eventi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $events = [];
        while($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
        return $events;
    } else {
        return false;
    }
}
