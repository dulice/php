<?php

require_once "../core/functions.php";

header("Content-Type: application/json; charset=UTF-8");
$sql = "SELECT * FROM categories WHERE 1";
$rows = items($sql);

$rows = [];
$query = mysqli_query(con(), $sql);
while($row = mysqli_fetch_assoc($query)) {
    $arr = [
        "id" => $row['id'],
        "title" => $row['title'],
        "ordering" => $row['ordering'],
        "created_at" => $row['created_at'],
    ];
    array_push($rows, $arr);
}

print_r(jsonOutput($rows));