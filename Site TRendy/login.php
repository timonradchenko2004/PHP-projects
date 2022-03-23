<?php
define("log","admin");
define("pass","u1624992");
session_start();
if(isset($_POST['btn'])){
    if($_POST['login'] == log)
    {
        if($_POST['pass'] == pass)
        {
            $_SESSION['admin']='admin';
            header("Location: admin.php");
        }
        else{
            $error[] = "Неверный пароль";
        }
    }
    else{
        $error[] = "Неверный логин";
    }
   
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
<style>
    form{
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border:2px solid black;
            margin-top:100px;
        }
        input{
            width:90%;
            height:30px;    
        }
    
</style>
<form action="" method="POST">
    <h3>Log In</h3>
    <h5>Login</h5>
    <input type="text" name="login"><br>
    <h5>Password</h5>
    <input type="password" name="pass"><br><br>
    <input type="submit"  value="Log IN" name="btn"><br>
</form>

    
</body>
</html>


