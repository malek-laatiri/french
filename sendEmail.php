<?php
include 'conn.php';
$editor = $_POST["editor"];
$subject = $_POST["subject"];
$to = $_POST["to"];



try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       

            $header = "From:abc@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail($to, $subject, $editor, $header);

            if ($retval == true) {
                echo "Message sent successfully...";
            } else {
                echo "Message could not be sent...";
            }
        }
    
} catch (Exception $e) {
    echo $e->getMessage();
}
