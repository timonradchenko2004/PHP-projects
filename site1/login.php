<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" >

</head>
<body>
    
<?php
  require_once('pages/functions.php');

if(!isset($_POST['regbtn'])){
?>

    <div class="container">
        <div class="block">
    <form method="POST" >
    <h1 >Log Up</h1>

        <div class="min-block">
            <input type="text" class="form-control" name="login" placeholder="Login">
        </div>
        <div class="min-block">
            <input type="password" class="form-control" name="pass1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="regbtn" >Log in</button>
        <a href="index.php?page=4"> Forgot your password?   </a>

    </form>
    </div>
    </div>

</body>
<?php
}
else {
            $result = login($_POST['login'],$_POST['pass1']);  
   
            if($result){
                session_start();
                $_SESSION["rigistered"] = $_POST['login'];
                header('Location: index.php');
            }else{
                session_start();
                $_SESSION["rigistered"] = '';

                header('Location: index.php?page=4');

            }

}
?>
</body>
</html>
