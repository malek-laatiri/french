<?php
include 'conn.php';
$editor = $_POST["editor"];
$title = $_POST["title"];



try {
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $statment = $conn->prepare('INSERT INTO blog(blog_content, blog_title) VALUES (:blog_content, :blog_title)');
        $statment->bindParam(':blog_content', $editor);
        $statment->bindParam(':blog_title', $title);
      
        $statment->execute();

    }


    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}