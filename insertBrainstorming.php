<?php
session_start();
include 'conn.php';

    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
          $statment = $conn->prepare('INSERT INTO brainstorming(brainstorming_content,created_by_id) VALUES (:brainstorming_content,:created_by_id)');
          $statment->bindParam(':brainstorming_content', $_POST["content"]);
          $statment->bindParam(':created_by_id', $_SESSION["user_id"]);
          $statment->execute();
  
      }
  
  
      echo "New record created successfully";
      } catch (PDOException $th) {
        echo $th->getMessage();
      }