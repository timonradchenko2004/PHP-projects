<h1>regestration</h1>
<?php
if(!isset($_POST['regbtn'])){
?>

<form method="POST" action = "index.php?page=4">
    <div class="form-group">
        <input type="text" class="form-control" name="login" placeholder="LOgin">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass1" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass2" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="E-mail">
    </div>
    
    <button type="submit" class="btn btn-primary" name="regbtn" >Register</button>

</form>

<?php
}else {

    if($_POST['pass1'] != $_POST['pass2']){

        echo '<h3 style="color:red">PASSWORD NOT MATCHES!</h3>';
    }else{
        $result = register($_POST['login'],$_POST['pass1'],$_POST['email']);
    
        if ($result){
            echo '<h3 style="color:green; font-family:Roboto;">New user added</h3>';

        }

    }

}
