<?php
include 'db.php';
id = $_GET['id'];
$sql = "DELETE FROM events WHERE id=$id";
$conn->query($sql);
header("Location: ../dashboard-admin.html");
?>
