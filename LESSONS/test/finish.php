<?php

session_start();
$temp = $_SESSION['test1'] * 1;
$temp += $_SESSION['test2'] * 3;
$temp += $_SESSION['test3'] * 5;

echo 'Вы набрали : '.$temp.' балл/а <br><br>';

?>
<form action="" method="POST">
<input type="submit" name="btn" value="Re-test">

</form>
<?php
if(isset($_POST['btn'])){
    header('Location:test1.php');
}