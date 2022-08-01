<?php

echo "<pre>";
$folderName = "../store/";
$filename = $_FILES['image']['name'];
$tempFile = $_FILES['image']['tmp_name'];

move_uploaded_file($tempFile, $folderName.uniqid()."_".$filename); 
header("location:index.php");