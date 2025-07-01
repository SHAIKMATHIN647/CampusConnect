<?php
session_start();
session_destroy();
header("Location: ../login.html");
?>

<!-- php/add-event.php -->
<?php
include 'db.php';
$title = $_POST['title'];
description = $_POST['description'];
date = $_POST['date'];
$venue = $_POST['venue'];
$image = $_POST['image'];
$sql = "INSERT INTO events (title, description, date, venue, image) VALUES ('$title', '$description', '$date', '$venue', '$image')";
$conn->query($sql);
header("Location: ../dashboard-admin.html");
?>
