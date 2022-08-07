<?php 

function con() {
    $conn = mysqli_connect("localhost", "root", "", "basic-crud");
    return $conn;
}

function url() {
    $url = "http://".$_SERVER['HTTP_HOST']."/crud/admin_dashboard/admin_dashboard";
    return $url;
}

$role = ["Admin", "Editor", "User"];
date_default_timezone_set('Asia/Yangon');