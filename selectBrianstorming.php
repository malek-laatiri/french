<?php

include 'conn.php';

$sql = "SELECT * FROM brainstorming ";
$result = $conn->query($sql);


foreach ($conn->query($sql) as $row) {

    echo'<div class="col-lg-6 mt-5">';
    echo '<div class="card">';
    echo '<div class="card-body">';
        echo '<h4 class="header-title">Idea</h4>';
            echo "<p>{$row["brainstorming_content"]}</p>";
            echo '<div class="my-rating"></div>';

            echo '</div>';
        echo '</div>';
    echo "</div>";




}
?>
<script>
$(".my-rating").starRating({
    starSize: 25,
    disableAfterRate:true,
    callback: function(currentRating, $el){
        console.log(currentRating)
        
    }
});
</script>