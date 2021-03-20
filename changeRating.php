<?php

include 'conn.php';
$data = json_decode(file_get_contents("php://input"));
$rating  =  $data->raiting;
$id=$data->id;
$userid=$data->userid;

$sql = "insert into rating (brainstorming_id,user_id,rating) values({$id},{$userid},{$rating})";
echo $sql;
 $stmt = $conn->prepare($sql);

  $stmt->execute();

    header("HTTP/1.1 200 OK");
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');

    http_response_code(201);

?>