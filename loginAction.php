<?php
session_start();
    include 'conn.php'; 
    $sql = "select * from user where user_username='{$_POST["username"]}' and user_password='{$_POST["password"]}'";
    foreach ($conn->query($sql) as $row) {
       
       
            $_SESSION["user_id"] = $row['user_id'];
            $_SESSION["user_username"]=$row['user_username'];
            $_SESSION["user_email"]=$row['user_email'];
            $_SESSION["user_type"]=$row['user_type']; 
            header("Location: index.php"); 
        
      

    }
   

?>