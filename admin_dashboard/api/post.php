<?php

require_once "../core/functions.php";

header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control_Allow-Orgin: *");

//fetch all post
$sql = "SELECT * FROM posts WHERE 1";

//fetch specific post id
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql .= " AND id=$id";
}

//limit the post
if(isset($_GET['limit'])) {
    $limit = $_GET['limit'];
    $sql .= " LIMIT $limit";
}
$rows = items($sql);

//fectch specific data
$rows = [];
$query = mysqli_query(con(), $sql);
while($row = mysqli_fetch_assoc($query)) {
    $arr = [
        "id" => $row['id'],
        "title" => $row['title'],
        "description" => $row['description'],
        "category_id" => singleListCategroy($row['category_id'])['title'],
    ];
    array_push($rows, $arr);
}

print_r(jsonOutput($rows));
?>