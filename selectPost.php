<style>
h2 {
  font-weight: bold;
  font-size: 2rem;
}
p {
  font-family: 'Schoolbell', arial, serif; ;
  font-size: 2rem;
  color: #002b59;
}
.postul,.postli {
  list-style:none;
}
.postul {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.postul .postli a {
  text-decoration:none;
  color:#000;
  background:#fbf49b;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  transform: rotate(-6deg);
  transition: transform .15s linear;
}

.postul .postli:nth-child(even) a {
  transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#f17cb8;
}
.postul .postli:nth-child(3n) a {
  transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#79f9fd;
}
.postul .postli:nth-child(5n) a {
  transform:rotate(5deg);
  position:relative;
  top:-10px;
}

.postul .postli a:hover,.postul .postli a:focus {
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  transform: scale(1.25);
  position:relative;
  z-index:5;
}

.postul .postli {
  margin:1em;
}


</style>
    <ul class='postul'>
<?php
session_start();
include_once 'conn.php';
$sql = "SELECT * FROM postit where receiver_id ='{$_SESSION["user_id"]}'";


foreach ($conn->query($sql) as $row) {
    echo "<li class='postli'>";
    echo   "<a href='.' contenteditable>";
    echo   "<h2>".$row["postit_title"]."</h2>";
    echo    "<p>".$row["postit_content"]."</p>";
    echo   "</a>";
    echo "</li>";
}
?>
</ul>