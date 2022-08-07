<?php

session_start();
if(!isset($_SESSION['authenticated'])){
    header('Location: form.php');
}

$auth_user = $_SESSION['auth_user'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Password</th>
            <th>Picture</th>
        </tr>
        <tr>
            <td><?php echo $auth_user['name']; ?></td>
            <td><?php echo $auth_user['age'];?></td>
            <td><?php echo $auth_user['email'];?></td>
            <td><?php echo $auth_user['password'];?></td>
            <td><?php echo '<img src="storage/images.jpg" alt="">';?></td>
        </tr>
    </table>
<h1><a href="logout.php">Logout</a></h1>
</div>
</body>
</html>
