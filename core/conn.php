<?php
    $conn = mysqli_connect("localhost", "root", "", "basic-crud");
    if(!$conn) {
        die("connect error:" .mysqli_connect_error());
    }