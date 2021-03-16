<?php

include 'conn.php';

$sql = "SELECT * FROM blog ";
foreach ($conn->query($sql) as $row) {

    echo'<div class="col-lg-6 mt-5">';
    echo '<div class="card">';
    echo '<div class="card-body">';
        echo "<h4 class='header-title'>{$row['blog_title']}</h4>";
            echo '<p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>';
            echo '<button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalLong">Read more</button>';
            echo '<div class="modal fade" id="exampleModalLong">';
            echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                        echo "<h5 class='modal-title'>{$row['blog_title']}</h5>";
                            echo '<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>';
                            echo '</div>';
                        echo '<div class="modal-body">';
                        echo "<p>{$row['blog_content']}";
                            echo  '</p>';
                            echo '</div>';
                        echo '<div class="modal-footer">';
                        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
                            echo  '<button type="button" class="btn btn-primary">Save changes</button>';
                            echo   '</div>';
                        echo  '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo "</div>";




}
