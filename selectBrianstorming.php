<?php

include 'conn.php';

$sql = "SELECT * FROM brainstorming ";
$result = $conn->query($sql);


foreach ($conn->query($sql) as $row) {

    echo '<div class="col-lg-6 mt-5">';
    echo '<div class="card">';
    echo '<div class="card-body">';
    echo '<h4 class="header-title">Idea</h4>';
    echo "<p>{$row["brainstorming_content"]}</p>";
    echo "<div class='my-rating' id={$row["brainstorming_id"]}></div>";

    echo '</div>';
    echo '</div>';
    echo "</div>";
}
?>
<script>
    $(".my-rating").starRating({
        starSize: 25,
        disableAfterRate: true,
        callback: function(currentRating, el) {
             var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "changeRating.php", true);
            xhttp.send(JSON.stringify({
                raiting: currentRating,
                id:el[0].id,
                userid:<?php echo json_encode($_SESSION["user_id"])?>
            })); 
        }
    });
</script>