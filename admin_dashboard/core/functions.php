<?php

    require "user.php";
    
    // common 
    function items($sql) {
        $rows = [];     
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
        if(strlen($str) >= $limit) {
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

    function totalCount($table) {
        $sql = "SELECT COUNT(id) AS total FROM $table";
        return items($sql)[0]['total'];
    }

    function totalCountChart($table, $data, $condition=1) {
        $sql = "SELECT COUNT(id) AS total FROM $table WHERE $data = $condition";
        return items($sql)[0]['total'];
    }

    //user
    function user($u) {
        $sql = "SELECT * FROM users WHERE id=$u";
        return item($sql);
    }

    function users() {
        $sql = "SELECT * FROM users";
        return items($sql);
    }

    // category 
    function createCategory() {
        $title = entity(strip_tags($_POST['title']));
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO categories(title,user_id) VALUES ('$title','$user_id')";
        runQuery($sql);
        redirect('category_list.php');
    }

    function listCategory() {
        $sql = "SELECT * FROM categories ORDER BY ordering DESC";
        return items($sql);
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

    function isCategory($id) {
        if(singleListCategroy($id)) {
            return singleListCategroy($id);
        } else {
            die(alert("danger", "Category does not match"));
        }
    }

    //post

    function createPost() {
        $title = entity($_POST['title']);
        $description = entity($_POST['description']); 
        $category_id = isCategory($_POST['category_id']);
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO posts(title, description, category_id, user_id) VALUES ('$title','$description', '$category_id', '$user_id')";
        runQuery($sql);
        redirect('post_list.php');
    }

    function userPost() {
        $user_id = $_SESSION['user']['id'];
        $sql = "SELECT * FROM posts WHERE user_id=$user_id";
        return items($sql);
    }

    function listPost() {
        if($_SESSION['user']['role'] == 2) {
            return userPost();
        } else {
            $sql = "SELECT * FROM posts";
            return items($sql);
        }        
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

    //front panel
    function fPost($data="created_at", $order="DESC") {
        $sql = "SELECT * FROM posts ORDER BY $data $order";
        return items($sql);     
    }
    
    function sameCat($category_id, $id=0, $limit=9999) {
        $sql = "SELECT * FROM posts WHERE category_id=$category_id AND id!=$id LIMIT $limit";
        return items($sql);
    }

    function searchPost($query) {
        $sql = "SELECT * FROM posts WHERE title LIKE '%$query%' OR description LIKE '%$query%' ";
        return items($sql);
    }

    function searchByDate($start, $end) {
        $sql = "SELECT * FROM posts WHERE created_at BETWEEN '$start' AND '$end' ";
        return items($sql);
    }

    function pinCat($category_id) {
        $sql = "UPDATE categories SET ordering=NULL";
        mysqli_query(con(), $sql);

        $sql = "UPDATE categories SET ordering=1 WHERE id=$category_id";
        runQuery($sql);
        redirect('category_list.php');
    }

    function unpinCat($category_id) {
        $sql = "UPDATE categories SET ordering=NULL";
        runQuery($sql);
        redirect('category_list.php');
    }

    //viewer

    function addViewer($user_id, $post_id, $device) {
        $sql = "INSERT INTO viewers(user_id, post_id, device) VALUES ('$user_id', '$post_id', '$device')";
        runQuery($sql);
    }

    function countByUser($user_id) {
        $sql = "SELECT * FROM viewers WHERE user_id=$user_id";
        return items($sql);
    }

    function countByPost($post_id) {
        $sql = "SELECT * FROM viewers WHERE post_id=$post_id";
        return items($sql);
    }

    //ads

    function createAds() {
        $foldername = "store/";
        $filename = $_FILES['photo']['name'];
        $tempName = $_FILES['photo']['tmp_name'];
        $photo = "$foldername".uniqid()."_"."$filename";
        move_uploaded_file($tempName, $photo);
        
        $owner_name = $_POST['owner_name'];
        $link = $_POST['link'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $sql = "INSERT INTO ads(owner_name, photo, link, start, end) VALUES ('$owner_name', '$photo', '$link', '$start', '$end')";
        runQuery($sql);
        redirect('ads_list.php');
    }

    function showAds() {
        $today = date("Y-m-d");
        $sql = "SELECT * FROM ads WHERE start <= '$today' AND end > '$today'";
        return items($sql);
    }

    function adsList() {
        $today = date("Y-m-d");
        $sql = "SELECT * FROM ads";
        return items($sql);
    }

    //payment

    function createPayment() {
        $from_id = $_SESSION['user']['id'];
        $to_id = $_POST['to_id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];

        $payAmount = $_SESSION['user']['money'] - $amount;
        $recieveAmount = user($to_id)['money'] + $amount;

        if(user($from_id)['money'] >= $amount) {
            $sql = "UPDATE users SET money='$payAmount' WHERE id=$from_id";
            mysqli_query(con(), $sql);
    
            $sql = "UPDATE users SET money='$recieveAmount' WHERE id=$to_id";
            mysqli_query(con(), $sql);
    
            $sql = "INSERT INTO transition(from_id, to_id, amount, description) VALUES ('$from_id', '$to_id', '$amount', '$description')";
            runQuery($sql);
            redirect('payment_history.php');
        } else {
           echo alert("danger", "You don't have enough money");
        }
    }

    function paymentList() {
        $id= $_SESSION['user']['id'];
        $sql = "SELECT * FROM transition WHERE from_id=$id OR to_id=$id";
        return items($sql);
    }

    //dashboard
    function viewPerDay($date) {
        $sql = "SELECT COUNT(id) as total FROM `viewers` WHERE DATE(created_at) = '$date'";
        return items($sql)[0]['total'];
    }

    //decode php to json
    function jsonOutput($json) {
        return json_encode($json);
    }