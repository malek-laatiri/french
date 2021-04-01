<?php
session_start();
include 'conn.php';

$sql = "SELECT * FROM reunion_invit where user_id={$_SESSION['user_id']}";
$stmt = $conn->prepare($sql);
$stmt->execute();
print_r($stmt->fetchAll());
die();
$reunion_id=$stmt->fetchAll()[0]["reunion_id"];
$sql = "SELECT * FROM reunion_invit join user on user.user_id=reunion_invit.user_id  where reunion_id={$reunion_id} ";
$stmt1 = $conn->prepare($sql);
$stmt1->execute();

// set the resulting array to associative
$result = $stmt1->setFetchMode(PDO::FETCH_ASSOC);

foreach($stmt1->fetchAll() as $k=>$v) {
    foreach($v as $key=>$value) {
        print_r("$key=>$value");
      }
      echo'<br>';
}




