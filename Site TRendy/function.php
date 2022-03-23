<?php


function show_cart()
{
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result = $db->query("SELECT catalog.img_1 AS img_c,catalog.name AS name_c, price, id_category, category.name AS name_ca,catalog.id AS id_c,art
    FROM catalog,category
    WHERE catalog.id_category = category.id
    ");
    $count=0;
    while($row = $result->fetch())
    {
        $img = $row['img_c'];
        $name = $row['name_c'];
        $price = $row['price'];
        $cat = $row['name_ca'];
        $art = $row['art'];
        $id = $row['id_c'];
        $p = new cart("$img","$name",$price,"$art","$cat",$id);
        $p->show();
    }
}


function show_cart_main()
{
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result = $db->query("SELECT catalog.img_1 AS img_c,catalog.name AS name_c, price, id_category, category.name AS name_ca,catalog.id AS id_c,art
    FROM catalog,category
    WHERE catalog.id_category = category.id
    ");
    $i=0;
    while($row = $result->fetch())
    {   if($i<6)
        {
        $img = $row['img_c'];
        $name = $row['name_c'];
        $price = $row['price'];
        $cat = $row['name_ca'];
        $art = $row['art'];
        $id = $row['id_c'];
        $p = new cart_main("$img","$name",$price,"$cat","$art",$id);
        $p->show();
        $i+=1;
        }
        else{
            return;
        }
        
    }
}


function show_menu()
{

    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result_menu = $db->query("SELECT name,main_name
        FROM category
        ");
        $count=0;
        while($row = $result_menu->fetch())
        {
            $name = $row['main_name'];
            $cat = $row['name'];
            $p = new menu_cart("$name","$cat");
            $p->show();
           
        }

}
function show_menu_pr()
{

    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result_menu = $db->query("SELECT main_name,name
        FROM category
        ");
        $count=0;
        while($row = $result_menu->fetch())
        {
            $name = $row['main_name'];
            $cat = $row['name'];
            $p = new menu_cart_pr("$name","$cat");
            $p->show();
           
        }

}

function show_product()
{
    $page = (isset($_GET['page'])) ? $_GET['page']:1;
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result = $db->query("SELECT img_1,img_2,img_3,name, price,description,art,package,weight
    FROM catalog
    WHERE catalog.id = $page
    ");
    $count=0;
    while($row = $result->fetch())
    {
        $img1 = $row['img_1'];
        $img2 = $row['img_2'];
        $img3 = $row['img_3'];
        $name = $row['name'];
        $price = $row['price'];
        $desc = $row['description'];
        $art = $row['art'];
        $weight = $row['weight'];
        $package = $row['package'];
        $p = new product("$img1","$img2","$img3","$name",$price,"$desc","$art","$weight","$package");
        $p->show();
    }
}

function show_title()
{
    $page = (isset($_GET['page'])) ? $_GET['page']:1;
    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result = $db->query("SELECT name
    FROM catalog
    WHERE catalog.id = $page
    ");
    $count=0;
    while($row = $result->fetch())
    {
        
        $name = $row['name'];
       
        $p = new title("$name");
        $p->show();
    }
}


function show_round()
{

    $db = new PDO("mysql:host=localhost;dbname=u1624992_trendy_shop;charset=utf8","u1624992_admin","trendy2022",[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $result_menu = $db->query("SELECT main_name,name,img
        FROM category
        ");
        $count=0;
        while($row = $result_menu->fetch())
        {
            $name = $row['main_name'];
            $img = $row['img'];
            $cat = $row['name'];
            $p = new round_cat("$name","$img","$cat");
            $p->show();
           
        }

}

