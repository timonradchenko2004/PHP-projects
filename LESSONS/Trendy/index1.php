<style media="screen">

  .block{
    transform: scale(2);
    width: 200px;
    height: 300px;
    display: flex;
    margin: 0 auto;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid red;
    text-decoration: none;
    color: black;
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
    justify-content: center;
    align-items: center;
  }
</style>


<div class="main">

<?php
session_start();
  ?>
    <div  class = 'block' >
      <div class="photo">
        <img src="<?php echo $_SESSION['img']?>" alt="">
      </div>
      <p><?php echo$_SESSION['name']?></p>
      <p><?php echo $_SESSION['price']?></p>
    </div>
  <?php
 ?>
  </div>
