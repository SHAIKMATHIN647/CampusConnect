<?php
include 'db.php';
id = $_POST['id'];
title = $_POST['title'];
description = $_POST['description'];
date = $_POST['date'];
$venue = $_POST['venue'];
$image = $_POST['image'];
$sql = "UPDATE events SET title='$title', description='$description', date='$date', venue='$venue', image='$image' WHERE id=$id";
$conn->query($sql);
header("Location: ../dashboard-admin.html");
?>