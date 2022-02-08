<?php
$login = 'admin';

$loginEr = false;
$pass1Er = false;
$pass2Er = false;
$emailEr = false;
$phoneEr = false;

if(isset($_POST['btn'])){
    $fLogin = trim(htmlspecialchars($_POST['login']));
    $fPass1 = trim(htmlspecialchars($_POST['pass1']));
    $fPass2 = trim(htmlspecialchars($_POST['pass2']));
    $fEmail = trim(htmlspecialchars($_POST['email']));
    $fPhone = trim(htmlspecialchars($_POST['phone']));
    
    if($fLogin == $login){
        $loginEr = 'Error this login is already used';

    }
    if(strlen($fPass1)<8){
        $pass1Er = 'Error password is < 8';

    }
    if($fPass1 != $fPass2){
        $pass2Er = 'Error passwords is not the same';

    }
    if(!filter_var($fEmail, FILTER_VALIDATE_EMAIL)){
        $emailEr = 'Error email is not correct';

    }
    if(!preg_match("/^\d{10}$/",$fPhone)){
        $phoneEr = 'Error phone is not correct';

    }



}
?>
<form method="POST">
    <input type="text" name="login">
    <?php if($loginEr){?> <span style="color:red; border:1px solid red;"><?php echo $loginEr ?> </span> <?php } ?></br>
    <input type="password" name="pass1">
    <?php if($pass1Er){?> <span style="color:red; border:1px solid red;"><?php echo $pass1Er ?> </span> <?php } ?></br>
    <input type="password" name="pass2">
    <?php if($pass2Er){?> <span style="color:red; border:1px solid red;"><?php echo $pass2Er ?> </span> <?php } ?></br>
    <input type="text" name="email">
    <?php if($emailEr){?> <span style="color:red; border:1px solid red;"><?php echo $emailEr ?> </span> <?php } ?></br>
    <input type="text" name="phone">
    <?php if($phoneEr){?> <span style="color:red; border:1px solid red;"><?php echo $phoneEr ?> </span> <?php } ?></br>
    <input type="submit" name="btn">
</form>
<style>
    form{
        width:600px;
        margin:0 auto;
    }
    
</style>



 <?php