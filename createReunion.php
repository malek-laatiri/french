<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set a Meeting</title>
</head>

<body>
    <form action="insertReunion.php" method="post">
        <label for="reunion_title"></label>
        <input type="text" name="reunion_title" id="">
        <label for="reunion_date"></label>
        <input type="date" name="reunion_date" id="">
        <label for="reunion_hour"></label>
        <input type="time" name="reunion_hour" id="">
        <label for="users">Participants</label>

        <select name="users[]" id="users" multiple>
            <?php

            include 'conn.php';

            $sql = "SELECT * FROM user ";
            $result = $conn->query($sql);


            foreach ($conn->query($sql) as $row) {

                echo "<option value='{$row["user_id"]}'>{$row["user_username"]}</option>";
            }
            ?>
            </select>

            <input type="submit" value="">
    </form>
</body>

</html>