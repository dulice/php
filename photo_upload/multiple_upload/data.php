<?php

function showImage() {
    $conn = mysqli_connect("localhost","root","","photo");
    $sql = "SELECT * FROM images";
    $query = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($rows, $row);
    }
    return $rows;
}
