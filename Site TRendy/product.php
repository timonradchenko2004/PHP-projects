<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    require_once('cart.php');
    require_once('function.php');
    show_title();
    ?>
    </title>
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
            <a href="#" data-modal="#modalmain">Обратная связь</a>
            <p>+79998889900</p>
        </nav>
        <div class="secr"> 
                    <a href="" class="burger-pr"  id="bur_btn" data-modal="#hmodal" ><img src="img/Frame 18.png" alt=""></a>
                </div>
                <div class="secr_2"> 
                    <a href="" class="close_btn close"  style="display: none;" id="close_btn"  data-close data-modal="#hmodal" ><img src="img/Frame 19.png" alt=""></a>
                </div>
       
    </div>  
</header>
<main class="product-c">
            <article class="menu">
                <div class="container">
                    <div class="block-pr">
                    <a href="catalog.php" >
                            <div class="block-m">
                                <div class="text">
                                Каталог
                                </div>
                            </div>
                        </a>
                        
                    <?php
                        require_once('cart.php');
                        require_once('function.php');
                        show_menu_pr();
                    ?>
                    </div>
                </div>
            </article>
            <section class="product">
                <div class="container"> 
                    <div class="block">
                        
                    <?php
                    require_once('cart.php');
                    require_once('function.php');
                    show_product();
                    ?>
                    </div>
                 </div>
            </section>
        </main>
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
</div>  

<div class="modal" id="modalmain">
        <div class="container modal-container">
                    <div class="block" >
                        <button data-close class="close">
                            <img src="img/Frame 19.png" alt="">
                        </button>
                            <?php  require_once('mail.php');?>
                            <form action="" class="form" method="POST">
                                <input type="tel" placeholder="Телефон"  name="phone">

                                <input type="email" placeholder="Почта" name="email">

                                <textarea name="comment" id="" placeholder="Комметарий" cols="30" rows="10"></textarea>
                                
                                <button class="btn" name="btn-modal">Оставить заявку</button>
                            </form>
                     </div>
                </div>
    </div>
    
<div class=" modal head-modal product-mod" id="hmodal">
        <div class=" container  modal-container container-cart">
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

    <script src="js/jquery.js"></script>
    <script src="js/indexjs.js"></script>
    <script src="js/slider.js"></script>

</body>
</html>


