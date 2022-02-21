<style media="screen">

  .cart{
    width: 200px;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid red;
    text-decoration: none;
    color: black;
    margin: 30px;
  }
  .block{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;

  }
  .photo{
    width: 100%;
    height: 100%;
    background: gray;

  }
  .main{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

  }
</style>

<div class="main">

<?php

/**
 *
 */
class cart
{
  public $id;
  public $img;
  public $name;
  public $price;
  public $cat;

  function __construct($id,$img,$name,$price,$cat)
  {
    $this->id=$id;
    $this->img=$img;
    $this->name=$name;
    $this->price=$price;
    $this->cat=$cat;

  }
  public function Show()
  {
    ?>
    <a href="index1.php?page=<?php echo $this->id?>" class="cart" data-cat="<?php echo $this->cat?>">
      <div  class = 'block'>
        <div class="photo">
          <img src="<?php echo $this->img?>" alt="">
        </div>
        <p><?php echo $this->name?></p>
        <p><?php echo $this->price?></p>
      </div>
    </a>
    <?php
  }

}

for ($i=1; $i <10 ; $i++) {
  $p = new cart($i,'/img.png' , 'name'.$i.'' ,'price'.$i.'' , 'cat'.$i.'');
  $p->Show();
}




?>
</div>
<?php

$db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$result = $db->query("SELECT name FROM item ");
$data = $result->fetchAll();
var_dump($data[2]['name']);

?>
