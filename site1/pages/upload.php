<h1>upload</h1>
<?php
if(!isset($_POST['uppbtn']))
{
?>
<form action="index.php?page=2" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="myfile">Select file for upload:</label>


    <input type="file" class="form-control"name="myfile" accept="image/*">
    </div>
<button type="submit" class="btn btn-primary" name="uppbtn">Send File</button>
</form>
<?php

}else{
    session_start();
    if($_SESSION["rigistered"] == 0){
        echo 'You must log in to upload files';
        exit();

    }
    if($_FILES['myfile']['error']!=0){

        echo '<h3 style="color:red">UPLOAD ERROR CODE:'.$_FILES['myfile']['error'].'</h3>';
        exit();

    }

    move_uploaded_file($_FILES['myfile']['tmp_name'],"./img/".$_FILES['myfile']['name']);
    echo '<h3 style="color:gree">Upload successfuly</h3>';


}