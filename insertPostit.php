<?php
session_start();
include_once 'conn.php';

    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var=0;
          $statment = $conn->prepare('INSERT INTO postit(postit_content,postit_title,sender_id,receiver_id,vue) VALUES (:postit_content,:postit_title,:sender_id,:receiver_id,:vue)');
          $statment->bindParam(':postit_content', $_POST["postit_content"]);
          $statment->bindParam(':postit_title', $_POST["postit_title"]);

          $statment->bindParam(':sender_id', $_SESSION["user_id"]);
          $statment->bindParam(':receiver_id', $_POST["users"]);
          $statment->bindParam(':vue',$var);

          $statment->execute();
  
      }
  
  
      echo "New record created successfully";
      } catch (PDOException $th) {
        echo $th->getMessage();
      }