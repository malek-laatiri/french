<style>
  h2 {
    font-weight: bold;
    font-size: 2rem;
  }

  p {
    font-family: 'Schoolbell', arial, serif;
    font-size: 1.2rem;
    color: #002b59;
  }

  .postul,
  .postli {
    list-style: none;
  }

  .postul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .postul .postli a {
    text-decoration: none;
    color: #000;
    background: #fbf49b;
    display: block;
    height: 20em;
    width: 20em;
    padding: 1em;
    box-shadow: 5px 5px 7px rgba(33, 33, 33, .7);
    transform: rotate(-6deg);
    transition: transform .15s linear;
  }

  .postul .postli:nth-child(even) a {
    transform: rotate(4deg);
    position: relative;
    top: 5px;
    background: #f17cb8;
  }

  .postul .postli:nth-child(3n) a {
    transform: rotate(-3deg);
    position: relative;
    top: -5px;
    background: #79f9fd;
  }

  .postul .postli:nth-child(5n) a {
    transform: rotate(5deg);
    position: relative;
    top: -10px;
  }

  .postul .postli a:hover,
  .postul .postli a:focus {
    box-shadow: 10px 10px 7px rgba(0, 0, 0, .7);
    transform: scale(1.25);
    position: relative;
    z-index: 5;
  }

  .postul .postli {
    margin: 1em;
  }

  .close {
    position: absolute;
    right: 32px;
    top: 32px;
    width: 32px;
    height: 32px;
    opacity: 0.3;
  }

  .close:hover {
    opacity: 1;
  }

  .close:before,
  .close:after {
    position: absolute;
    left: 15px;
    content: ' ';
    height: 33px;
    width: 2px;
    background-color: #333;
  }

  .close:before {
    transform: rotate(45deg);
  }

  .close:after {
    transform: rotate(-45deg);
  }
</style>
<ul class='postul'>
  <?php
  session_start();
  include_once 'conn.php';
  $sql = "SELECT * FROM postit where receiver_id ='{$_SESSION["user_id"]}' and vue=0 ";


  foreach ($conn->query($sql) as $row) {
    echo "<li class='postli'>";

    echo   "<a href='.' contenteditable>";
    echo '<button type="button" onclick="vue(this)" id="' . $row["postit_id"] . '"> X </button>';

    echo   "<h2>" . $row["postit_title"] . "</h2>";
    echo    "<p>" . $row["postit_content"] . "</p>";

    echo   "</a>";
    echo "</li>";
  }
  ?>
</ul>
<script>
  function vue(x) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        location.reload();
      }
    };
    xhttp.open("POST", "changeVue.php", true);
    xhttp.send(JSON.stringify({
      id: x.id,
    }));
  }
</script>
