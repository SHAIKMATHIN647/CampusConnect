<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
  header("Location: ../login.html");
  exit();
}

$username = $_SESSION['user'];
$event_id = $_POST['event_id'];

// Get user_id from username
$user_query = "SELECT id FROM users WHERE username='$username'";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();
$user_id = $user['id'];

// Check if already registered
$check = "SELECT * FROM registrations WHERE user_id=$user_id AND event_id=$event_id";
$exists = $conn->query($check);
if ($exists->num_rows == 0) {
  $sql = "INSERT INTO registrations (user_id, event_id) VALUES ($user_id, $event_id)";
  $conn->query($sql);
}

header("Location: ../dashboard-student.html");
?>
