<?php
    
    require_once "conn.php";
    function createCategory() {
        global $conn;
        $message = $_GET['message'];
        $sql = "INSERT INTO todo(message) VALUES ('$message')";
        if(mysqli_query($conn, $sql)) {
            return true;
        } else {
            die("create error" .mysqli_error());
        }
    }

    function listCategory() {
        global $conn;
        $rows = [];
        $sql = "SELECT * FROM todo";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($query)) {
            array_push($rows, $row);
        }
        return $rows;
    }

    function singleListCategroy($id) {
        global $conn;
        $fetchDetail = "SELECT * FROM todo WHERE id=$id";
        $fetchMessage = mysqli_query($conn, $fetchDetail);
        $row = mysqli_fetch_assoc($fetchMessage);
        return $row;
    }

    function deleteCategory($id) {
        global $conn;
        $sql = "DELETE FROM todo WHERE id=$id";
        if(mysqli_query($conn, $sql)) {
            return true;
        } else {
            die("delete error" .mysqli_error());
        }
    }

    function updateCategroy($id) {
        global $conn;
        $message = $_GET['message'];
        $sql = "UPDATE todo SET message='$message' WHERE id=$id";
        if(mysqli_query($conn, $sql)) {
            return true;
        } else {
            die("update error:" .mysqli_error());
        }
    }
    