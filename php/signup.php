<?php
include 'db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$role = $_POST['role'];
$sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
if ($conn->query($sql) === TRUE) {
  header("Location: ../login.html");
} else {
  echo "Signup Failed";
}
?>