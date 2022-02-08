<?php

class Product 
{
    public $price =100;
    public $name = 'test';
    
   public  function __constructor($price,$name){
       $this->price = $price;
       $this->name = $name;
   }

   public function GetProduct(){
    return 'Name: '.$this->name.', Price: '.$this->price.'';
   }
    public static function SearchByName($products,$name)
    {
        foreach ($products as $product) {
            if($product->name == $name)
            {
                return $product;
            }
            
        }
    }
}

$products = [];


$p = new Product;
echo $p->GetProduct();