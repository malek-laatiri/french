<?php

include 'conn.php';

$sql = "SELECT * FROM blog ";
$result = $conn->query($sql);


foreach ($conn->query($sql) as $row) {

	echo '<h5>' . $row["blog_title"] . '</h5>';
	echo '<p> ' . $row['blog_content'] . '</p>';
}
