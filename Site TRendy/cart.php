<?php


class cart_main
 {
    public $img;
    public $name;
    public $price;
    public $cat;
    public $art;
    public $id;

     public function __construct($img,$name,$price,$cat,$art,$id)
     {
        $this->img =$img;
        $this->name =$name;
        $this->price =$price;
        $this->cat =$cat;
        $this->id =$id;
        $this->art =$art;
     }
     public function show()
     {
         ?>
           <a href="<?php echo get_template_directory_uri()?>/product.php?page=<?php echo $this->id ?>" class="x-cart" data-cat="<?php echo $this->cat ?>" id="<?php echo $this->id ?>">
            <div class="cart">
                <div class="photo"><img  style = "width:100%; height:100%" src="<?php echo get_template_directory_uri()?>/img/<?php echo $this->img ?>" alt=""></div>
                <p><?php echo $this->name ?></p>
                <p><?php echo $this->art ?></p>
                <p><?php echo $this->price ?> руб</p>
            </div>
        </a>
         <?php
     }
    
}
class cart
 {
    public $img;
    public $name;
    public $price;
    public $cat;
    public $art;
    public $id;

     public function __construct($img,$name,$price,$art,$cat,$id)
     {
        $this->img =$img;
        $this->name =$name;
        $this->price =$price;
        $this->cat =$cat;
        $this->id =$id;
        $this->art =$art;
     }
     public function show()
     {
         ?>
           <a href="product.php?page=<?php echo $this->id ?>" class="x-cart" data-cat="<?php echo $this->cat ?>" id="<?php echo $this->id ?>">
            <div class="cart">
                <div class="photo"><img  style = "width:100%; height:100%" src="img/<?php echo $this->img ?>" alt=""></div>
                <p><?php echo $this->name ?></p>
                <p><?php echo $this->art ?></p>
                <p><?php echo $this->price ?> руб</p>
            </div>
        </a>
         <?php
     }
    
}


class menu_cart
{
public $name;
public $cat;
 public function __construct($name,$cat)
 {
    $this->name =$name;
    $this->cat =$cat;
 }
 public function show()
 {
     ?>

    <a href="" data-filter="<?php echo $this->cat ?>">
        <div class="block-m">
            <div class="text">
            <?php echo $this->name?>
            </div>
        </div>
    </a>

     <?php
 }
}

class title
{
public $name;

 public function __construct($name)
 {
    $this->name =$name;

 }
     public function show()
     {
        
    
        echo $this->name;
         
     
    }
}

class menu_cart_pr
{
public $name;
public $cat;

 public function __construct($name,$cat)
 {
    $this->name =$name;
    $this->cat =$cat;

 }
 public function show()
 {
     ?>

    <a href="catalog.php?sector=<?php echo $this->cat?>">
        <div class="block-m">
            <div class="text">
            <?php echo $this->name?>
            </div>
        </div>
    </a>

     <?php
 }
}
class product
 {
    public $img_1;
    public $img_2;
    public $img_3;
    public $name;
    public $price;
    public $desc;
    public $art;
    public $weight;
    public $package;
     public function __construct($img_1,$img_2,$img_3,$name,$price,$desc,$art,$weight,$package)
     {
        $this->img_1 =$img_1;
        $this->img_2 =$img_2;
        $this->img_3 =$img_3;
        $this->name =$name;
        $this->price =$price;
        $this->desc =$desc; 
        $this->art =$art;
        $this->weight =$weight;
        $this->package =$package;

     }
     public function show()
     {
         ?>
            <div class="product-cart">
                <div class="slider">
                    <div class="slider__wrapper">
                        <div class="slider__item">
                            <img src="img/<?php echo $this->img_1 ?>" alt=" " >
                        </div>

                        <?php if( $this->img_2 =="") {
                            ?>
                                
                        <?php }else { ?>
                                <div class="slider__item">
                                     <img src="img/<?php echo $this->img_2 ?>" alt=" " >
                                </div>
                            <?php } ?>
                        
                            <?php if( $this->img_3 =="") {
                            ?>
                                
                        <?php }else { ?>
                                <div class="slider__item">
                                     <img src="img/<?php echo $this->img_3 ?>" alt=" " >
                                </div>
                            <?php } ?>
                    </div>
                    <a class="slider__control slider__control_left" href="#" role="button"></a>
                    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
                </div>
                <div class="text-block">
                    <div><h2><?php echo $this->name ?></h2>
                    <h4>Артикул: <?php echo $this->art ?></h4>
                    <h4>Цена: <?php echo $this->price ?> руб</h4>
                    <h4>Вес: <?php echo $this->weight ?> г</h4>
                    <h4>Упаковка: <?php echo $this->package ?> шт</h4>
                </div>
                    <div class="text">
                    <?php echo $this->desc?>                   
                    </div>
                </div>
            </div>
         <?php
     }
    
}
class round_cat
{
public $name;
public $img;
public $cat;
 public function __construct($name,$img,$cat)
 {
    $this->name =$name;
    $this->img =$img;
    $this->cat =$cat;
 }
 public function show()
 {
     ?>
        <a href="<?php echo get_template_directory_uri()?>/catalog.php?round=<?php echo $this->cat?>"> 
            <div class="round"> 
            <img src="<?php echo get_template_directory_uri()?>/img/<?php echo $this->img?>" alt="">
             <p><?php echo $this->name?></p>
            </div>
        </a>

     <?php
 }
}
