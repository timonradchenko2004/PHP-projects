<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/page-wrapper.css">
</head>
<body>

    <div class="page-wrapper">


        <header>
            <div class="container">
                <img src="img/image 7.svg" alt="">
                <nav>
                    <a href="trendyrus.ru">Главная страница</a>
                    <a href="news.html">Новости</a>
                    <a href="catalog.php">Каталог</a>
                    <a href="" data-modal="#modalmain">Обратная связь</a>
                        <p id="temp">+79998889900</p>
                </nav>
                <div class="secr"> 
                    <a href="" class="burger burger-ct"  id="bur_btn" data-modal="#hmodal" ><img src="img/Frame 18.png" alt=""></a>
                </div>
                <div class="secr_2"> 
                    <a href="" class="close_btn close"  style="display: none;" id="close_btn"  data-close data-modal="#hmodal" ><img src="img/Frame 19.png" alt=""></a>
                </div>
            </div>  
        </header>
        <main>
            <section class="menu">
                <div class="container">
                    <div class="block">
                    <a href="" data-filter="all">
                            <div class="block-m">
                                <div class="text">
                                    Все товары
                                </div>
                                
                            </div>
                        </a>
                        
                    <?php
                       
                         require_once('cart.php');
                        require_once('function.php');
                        show_menu();
                            
                        
                    ?>
                    </div>
                </div>
            </section>
            <section class="catalog">
                <div class="container">
                    <h1>Каталог товаров</h1>
                        <div class="block">
                            
                        <?php
                        require_once('cart.php');
                        require_once('function.php');
                        show_cart();

                        ?>

                        </div>
                 </div>
            </section>
        </main>
        
        <script>
            <?php if(isset($_GET["sector"])) { ?>
        let cat = "<?php echo (isset($_GET["sector"]))?$_GET["sector"]:"1"?>";
        let cats = document.querySelectorAll('.x-cart');
        if(cat =='1'){
                cattemp.classList.remove('close');
        }
        else{
            cats.forEach(cattemp => 
            {
            if(cattemp.dataset.cat != cat){
                cattemp.classList.add('close');
            }
            });
        }
        <?php } ?>

        <?php if(isset($_GET["round"])) { ?>

        let round_cat = "<?php echo $_GET["round"]?>";
        let round_cats = document.querySelectorAll('.x-cart');
        round_cats.forEach(round_cattemp => {
            if(round_cattemp.dataset.cat != round_cat){
                round_cattemp.classList.add('close');
            }
        });

        <?php } ?>

        </script>

        <footer>
            <div class="container">
                <div class="block">
                    <img src="img/image 7.svg" alt="">
                    <div class="text">
                        <p> Торговая марка Тренди представлена на российском рынке 15 лет .</p>
                        За это время продукция зарекомендовала себя как высококачественная, проверенная временем.
                        <p> Благодорим вас, наши постоянные клиенты покупатели, за доверие!</p>
                        Постараемся и дальше радовать новыми сериями.
                    </div>
                    <div class="info">
                        <div class="min-block">
                            <img src="img/IMAGE.png" alt="">
                            <div><p>FIND</p> </div>
                            <p>Central Park, Manhattan</p>
                        </div>
                        <div class="min-block">
                            <img src="img/IMAGE (1).png" alt="">
                            <p>EMAIL</p>
                            <p>pompeopotery@gmail.com</p>
                        </div>
                        <div class="min-block">
                            <img src="img/IMAGE (2).png" alt="">
                            <p>CALL</p>
                            <p>+1 292 345 678</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal" id="modalmain">
            <div class="container modal-container">
                        <div class="block" >
                            <button data-close class="close">
                                <img src="img/Frame 19.png" alt="">
                            </button>
                                <?php  require_once('mail.php');?>
                            <form  class="form" method="POST" >
                                <input type="tel" placeholder="Телефон"  name="phone">
                                <?php if($error){?> <span style="color:red; position:relative"><?php echo $error ?> </span> <?php } ?></br>
                                <input type="email" placeholder="Почта" name="email">
                                <?php if($error){?> <span style="color:red; position:relative"><?php echo $error ?> </span> <?php } ?></br>
                                <textarea name="comment" id="" placeholder="Комметарий" cols="30" rows="10"></textarea>
                                <?php if($error){?> <span style="color:red; position:relative"><?php echo $error ?> </span> <?php } ?></br>
                                <button class="btn" name="btn-modal">Оставить заявку</button>
                            </form>
                         </div>
                    </div>
        </div>
    


        <div class=" modal head-modal" id="hmodal">
            <div class=" container">
                 <div class="block" >
                    <nav>
                        <a href="trendyrus.ru">Главная страница</a>
                        <a href="news.html">Новости</a>
                        <a href="catalog.php">Каталог</a>
                        <a href="#" data-modal="#modalmain">Обратная связь</a>
                    </nav>    
                </div>
            </div>
        </div>

        </div>
        <script src="js/jquery.js"></script>
        <script src="js/indexjs.js"></script>
    </body>
</html>