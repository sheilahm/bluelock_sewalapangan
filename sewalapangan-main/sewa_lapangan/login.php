<?php
require 'koneksi.php';

// if(isset($_POST['login'])){

//     $username = $_POST['username'];
//     $password = md5($_POST['password']);

//     $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

//     if(mysqli_num_rows($result) === 1 ){
//       $row = mysqli_fetch_assoc($result);
//       if(password_verify($password, $row["password"])){
//         header('Location: index.php');
//         exit;
//       }
//     }

// }
session_start();

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if($result -> num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['login'] = true;
    header('Location: index.php');
  } else{
    echo "<script>alert('Username atau Password salah!');</script>";
  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Login</title>  
    <style>
    input[type="password"],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 20px;
      box-sizing: border-box;
    }
    </style>
</head>
<body>  
<div class="container">
    <h1>LOGIN</h1>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter Username">
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <button type="submit" name="login">Login</button>
    </form>
</div>    
</body>
</html>