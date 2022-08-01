<?php

$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","photo");

$sql = "SELECT * FROM images WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$imageLink = $row['image'];

$sql = "DELETE FROM images WHERE id=$id";
if(mysqli_query($conn, $sql)) {
    unlink("$imageLink");
    header("location:index.php");
}