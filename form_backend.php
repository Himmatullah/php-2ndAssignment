<?php

session_start();

$name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $picture = $_FILES['Photo'];
    
    $file_name = $picture['name'];
    $file_tmp_name = $picture['tmp_name'];
    $file_type = $picture['type'];
    $file_size = $picture['size'];
    
    
    if($file_type != 'image/jpeg' && $file_type != 'image/png'){
      echo '<p style="color:red">Only Images are allowed!</p>';
    }
    
    $max_size = 500 * 1024;
    
    // 500 KB is allowed 
    if($file_size > $max_size){
      echo '<p style="color:red">Max file size is 500 KB!</p>';
    }
    
    
    move_uploaded_file($file_tmp_name, 'storage/'. $file_name);
    

      //  echo $name . "  " . $age . "  " . $email . "  " . $password ;
 
    $user =[
        'name' => $name,
        'age' => $age,
        'email' => $email,
        'password' => $password,
        'photo' => $picture
    ];

    $_SESSION['auth_user'] = $user;
    $_SESSION['authenticated'] = true;

   header('Location: dashboard.php');
?>