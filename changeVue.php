<?php

include 'conn.php';
$data = json_decode(file_get_contents("php://input"));
$id  =  $data->id;


$sql = "UPDATE postit SET vue=1 WHERE postit_id=".$id;

 $stmt = $conn->prepare($sql);

  $stmt->execute();

    header("HTTP/1.1 200 OK");
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');

    http_response_code(201);
    echo json_encode("done");

?>