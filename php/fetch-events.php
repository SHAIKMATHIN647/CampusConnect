<?php
include 'db.php';
$sql = "SELECT * FROM events ORDER BY date ASC";
$result = $conn->query($sql);
$events = array();
while ($row = $result->fetch_assoc()) {
  $events[] = $row;
}
echo json_encode($events);
?>