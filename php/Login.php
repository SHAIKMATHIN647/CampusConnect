<?php
session_start();
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$sql = "SELECT * FROM users WHERE username='$username' AND role='$role'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $role;
    if ($role == 'admin') header("Location: ../dashboard-admin.html");
    else header("Location: ../dashboard-student.html");
  } else {
    echo "Invalid credentials";
  }
} else {
  echo "User not found";
}
?>
