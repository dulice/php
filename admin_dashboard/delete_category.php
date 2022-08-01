<?php
    require_once "template/header.php";
    if(deleteCategory($_GET['id'])) {
        echo "<script> location.href = 'category_list.php' </script>";
    }