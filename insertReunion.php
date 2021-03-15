<?php
session_start();
include 'conn.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $statment = $conn->prepare('INSERT INTO reunion(reunion_title,reunion_date,reunion_hour,user_id) VALUES (:reunion_title,:reunion_date,:reunion_hour,:user_id)');
        $statment->bindParam(':reunion_title', $_POST["reunion_title"]);
        $statment->bindParam(':reunion_date', $_POST["reunion_date"]);
        $statment->bindParam(':reunion_hour', $_POST["reunion_hour"]);
                $statment->bindParam(':user_id', $_SESSION["user_id"]);

        $statment->execute();
    }
    $lastid=$conn->lastInsertId();
    foreach ($_POST['users'] as $selectedOption) {
        $statment = $conn->prepare('INSERT INTO reunion_invit(reunion_id,user_id) VALUES (:reunion_id,:user_id)');
        $statment->bindParam(':reunion_id',$lastid);
        $statment->bindParam(':user_id', $selectedOption);
        $statment->execute();
    }

    echo "New record created successfully";
} catch (PDOException $th) {
    echo $th->getMessage();
}
