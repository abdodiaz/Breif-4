<?php
include('config.php');
include('selectaut.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="insertaut.php" method="post" enctype="multipart/form-data">
        <label>name</label>
        <input type="text" name="name" id="name">
        <label>image</label>
        <input type="file" name="img" width="500px" height="600px" id="img">
        <input type="submit" name="insert" value="ok">
</form>
</body>
</html>