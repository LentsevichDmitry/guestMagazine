<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="do.php" method="post">
    <label for="">Name:</label>
        <br>
    <input type="text" name="name" id="name" required>
        <br>
    <label for="review">Review:</label>
        <br>
    <textarea name="review" id="review" cols="40" rows="10"></textarea>
        <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
