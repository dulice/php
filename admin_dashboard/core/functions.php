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

    function textLimit ($str, $limit=50) {
        // substr($str, $limit, $length);
        if(strlen($str) >= 50) {
            return substr("$str", 0, $limit) . "...";
        } else {
            return $str;
        }
    }

    function entity ($text) {
        $text = trim($text);
        $text = htmlentities($text, ENT_QUOTES);
        $text = stripslashes($text);
        return $text;
    }

    //user
    function user($u) {
        $sql = "SELECT * FROM users WHERE id=$u";
        return item($sql);
    }

    function users() {
        return items('users');
    }

    // category 
    function createCategory() {
        $title = entity($_POST['title']);
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

    //post

    function createPost() {
        $title = entity($_POST['title']);
        $description = entity($_POST['description']);
        $category_id = $_POST['category_id'];
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO posts(title, description, category_id, user_id) VALUES ('$title','$description', '$category_id', '$user_id')";
        runQuery($sql);
        redirect('post_list.php');
    }

    function listPost() {
        return items('posts');
    }

    function singleListPost($id) {
        $fetchDetail = "SELECT * FROM posts WHERE id=$id";
        return item($fetchDetail);
    }

    function deletePost($id) {
        $sql = "DELETE FROM posts WHERE id=$id";
        runQuery($sql);
        redirect('post_list.php');
    }

    function updatePost($id) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $user_id = $_SESSION['user']['id'];   
        $sql = "UPDATE posts SET title='$title', description='$description', category_id='$category_id', user_id='$user_id' WHERE id=$id";
        runQuery($sql);
        redirect('post_list.php');
    }
    