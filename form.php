<?php
    session_start();
    if(isset($_SESSION['authenticated'])){
        header('Location: dashboard.php');
    }
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
    <form action="form_backend.php" method="post" enctype="multipart/form-data">
        <label for="">Name:</label>
        <input type="text" name="name"/>
        <br>
        <label for="">Age:</label>
        <input type="number" name="age" max="120"/>
        <br>
        <label for="">Email:</label>
        <input type="email" name="email"/>
        <br>
        <label for="">Password:</label>
        <input type="password" name="password"/>
        <br>
        <label for="">Photo:</label>
        <input type="file" name="Photo"/>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>