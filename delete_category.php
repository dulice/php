<?php
    require_once "template/header.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM todo WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        echo "<script>
        location.href = 'category_list.php'
        </script>";
    } else {
        die("delete error");
    }