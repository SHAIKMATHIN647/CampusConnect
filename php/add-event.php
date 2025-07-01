<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $location = $_POST['location'];

  $stmt = $conn->prepare("INSERT INTO events (title, description, event_date, location) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $title, $description, $date, $location);
  if ($stmt->execute()) {
    echo "Event added successfully";
  } else {
    echo "Error adding event.";
  }
}
?>
