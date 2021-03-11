<?php
include_once 'conn.php';
$sql = "SELECT * FROM postit ";
$result = $conn->query($sql);


foreach ($conn->query($sql) as $row) {
    echo "<li>";
    echo   "<a href='#' contenteditable>";
    echo   "<h2>".$row["postit_title"]."</h2>";
    echo    "<p>".$row["postit_content"]."</p>";
    echo   "</a>";
    echo "</li>";
}
