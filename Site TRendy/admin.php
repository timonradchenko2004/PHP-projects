<?php
session_start();
if(isset($_SESSION['admin']))
{?>
    

<style>
    .block{
        width: 50%;
        display:flex;
        flex-direction:row;
        justify-content:space-around;

    }
</style>

<div class="block">

<form action="" method="POST">
    <h1>Add Product</h1>
    <label for="">img 1</label><br>
    <input type="text" name="img1"><br>
    <label for="">img 2</label><br>
    <input type="text" name="img2"><br>
    <label for="">img 3</label><br>
    <input type="text" name="img3"><br>
    <label for="">name</label><br>
    <input type="text" name="name"><br>
    <label for="">price</label><br>
    <input type="text" name="price"><br>
    <label for="">package</label><br>
    <input type="text" name="pac"><br>
     <label for="">weight</label><br>
    <input type="text" name="wei"><br>
    <label for="">articul</label><br>
    <input type="text" name="art"><br>
    <label for="">description</label><br>
    <input type="text" name="desc"><br>
    
    <label for="">id-Category</label><br>
    <select name = "id-cat">
        <?php
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        $result = $db->query("SELECT main_name,id FROM category");
        while($row = $result->fetch())
        {
            echo '<option value="'.$row["id"].'">'.$row["main_name"].'</option>';
        }
        ?>
    </select><br><br>
    
    
    <input type="submit" name="product" value="Add product">
</form>

<form action="" method="POST">
    <h1>Add Category</h1>
    <label for="">img</label><br>
    <input type="text" name="img"><br>
    <label for="">name</label><br>
    <input type="text" name="name"><br>
    <label for="">main-name</label><br>
    <input type="text" name="main-name"><br><br><br>
    <input type="submit" name="category"  value="Add category">
</form>

</div>
<?php 
if(isset($_POST['product'])){
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $pac = $_POST['pac'];
    $wei = $_POST['wei'];
    $art = $_POST['art'];
    $desc = $_POST['desc'];
    $cat_id = $_POST['id-cat'];
    $error = [];

    if(strlen($img1)==0||strlen($img2)==0||strlen($img3)==0||strlen($name)==0||strlen($price)==0||strlen($pac)==0||strlen($wei)==0||strlen($art)==0||strlen($desc)==0||strlen($cat_id)==0)
    {
        $error[]='Заполните все поля';  
    }

    if(!empty($error)){
        echo '<p style="color:red">'.implode(",<br>",$error).'</p>';
    }else{
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        $result = $db->query("INSERT INTO catalog (img_1,img_2,img_3,name,price,description,weight,package,id_category,art) 
        VALUES('$img1','$img2','$img3','$name',$price,'$desc','$wei',$pac,$cat_id,'$art')");
        
    }

}

if(isset($_POST['category'])){
    $img = $_POST['img'];
    $main_name = $_POST['main-name'];
    $name = $_POST['name'];
    $error = [];
    if(strlen($img)==0||strlen($name)==0||strlen($main_name)==0)
    {
        $error[]='Заполните все поля';  
    }

    if(!empty($error)){
        echo '<p style="color:red">'.implode(",<br>",$error).'</p>';
    }else{
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        $result = $db->query("INSERT INTO category (img,name,main_name) 
        VALUES('$img','$name','$main_name')");
        
    }

}



}else{
    header("Location:login.php");
}


