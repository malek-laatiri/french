<?php
include 'conn.php';
$editor = $_POST["editor"];
$title = $_POST["title"];



try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "SELECT * FROM users ";
        $result = $conn->query($sql);


        foreach ($conn->query($sql) as $row) {
            $to = $row["user_email"];
            $subject = $title;

            $message = $editor;

            $header = "From:abc@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail($to, $subject, $message, $header);

            if ($retval == true) {
                echo "Message sent successfully...";
            } else {
                echo "Message could not be sent...";
            }
        }
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
