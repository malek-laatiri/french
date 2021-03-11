<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor_4.16.0_standard/ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="insertBlog.php" method="post">
<input type="text" name="title" id="title">
<textarea class="ckeditor" name="editor"></textarea>
<input type="submit" value="Add Blog">
</form>
</body>
</html>