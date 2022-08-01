<?php

echo "<pre>";
$conn = mysqli_connect("localhost","root","","photo");

$folderName = "../store/";
$filenames = $_FILES['image']['name'];
$tempFiles = $_FILES['image']['tmp_name'];

foreach($filenames as $key=>$name) {
    $imageName = "$folderName".uniqid()."_".$name;
    move_uploaded_file($tempFiles[$key], $imageName);
    $sql = "INSERT INTO images(image) VALUES ('$imageName')";


    if(mysqli_query($conn, $sql)) {
        header("location:index.php");
    }
}