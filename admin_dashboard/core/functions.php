<?php

    require "user.php";

    // common 
    function items($data) {
        $rows = [];
        $sql = "SELECT * FROM $data";
        $query = mysqli_query(con(), $sql);
        while($row = mysqli_fetch_assoc($query)) {
            array_push($rows, $row);
        }
        return $rows;
    }

    function item($sql) {
        $fetchMessage = mysqli_query(con(), $sql);
        $row = mysqli_fetch_assoc($fetchMessage);
        return $row;
    }

    function showTime($timestamp, $format="d-m-Y") {
        return date($format, strtotime($timestamp));
    }

    //user
    function user($u) {
        $sql = "SELECT * FROM users WHERE id=$u";
        return item($sql);
    }

    // category 
    function createCategory() {
        $title = $_POST['title'];
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO categories(title,user_id) VALUES ('$title','$user_id')";
        runQuery($sql);
        redirect('category_list.php');
    }

    function listCategory() {
        return items('categories');
    }

    function singleListCategroy($id) {
        $fetchDetail = "SELECT * FROM categories WHERE id=$id";
        return item($fetchDetail);
    }

    function deleteCategory($id) {
        $sql = "DELETE FROM categories WHERE id=$id";
        runQuery($sql);
        redirect('category_list.php');
    }

    function updateCategroy($id) {
        $title = $_GET['title'];
        $user_id = $_SESSION['user']['id'];
        $sql = "UPDATE categories SET title='$title',user_id='$user_id' WHERE id=$id";
        runQuery($sql);
        redirect('category_list.php');
    }
    