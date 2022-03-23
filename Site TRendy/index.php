<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy</title>
    <link rel="stylesheet" href="css/page-wrapper.css">
</head>
<body>

    <div class="page-wrapper">

        <header>
            <div class="container">
                <img src="<?php echo get_template_directory_uri()?>/img/image 7.svg" alt="">
                <nav>
                    <a class="nav-head" href="">Главная страница</a>
                    <a href="<?php echo get_template_directory_uri()?>/news.php">Новости</a>
                    <a href="<?php echo get_template_directory_uri()?>/catalog.php">Каталог</a>
                    <a href="#" data-modal="#modalmain">Обратная связь</a>
                    <p>+79998889900</p>
                </nav>
                <div class="secr"> 
                    <a href="" class="burger"  id="bur_btn" data-modal="#hmodal" ><img src="<?php echo get_template_directory_uri()?>/img/Frame 18.png" alt=""></a>
                </div>
                <div class="secr_2"> 
                    <a href="" class="close_btn close"  style="display: none;" id="close_btn"  data-close data-modal="#hmodal" ><img src="<?php echo get_template_directory_uri()?>/img/Frame 19.png" alt=""></a>
                </div>
               
            </div>  
        </header>
        <main>
                <section class="sec-1">
                    <div class="container">
                        <div class="block-center">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri()?>/img/808b0c97bfa6a2c05823bd27cfa9febc 2.png" alt="">
                            </div>
                            <div class="block">
                                <p>ООО”ТрендРус”</p>
                                <div class="text">
                                     Маникюрные и Педикюрные принадлежности оптом
                                </div>
                                <p>Красота до кончиков пальцев</p>
                                
                            </div>
                        </div>
                     </div>
                </section>

                <section class="sec-2">
                    <div class="container">
                        <h1>Маникюрные Инструметы</h1>
                        <h5>TRENDY PRODUCTS CO.LTD</h5>
                            <div class="block">
                                <?php
                                   
                                require_once('cart.php');
                                require_once('function.php');
                                show_round();
                                
                                ?>  
                            
                            </div>
                     </div>
                </section>

                <section class="sec-3">
                    <div class="container">
                        <h1>Мы гарантируем</h1>
                            <div class="block">
                                <div class="min-block"> 
                                    <div class="round"><img src="<?php echo get_template_directory_uri()?>/img/image 15.png" alt=""></div>
                                    <p>прекрасные
                                        цены</p>
                                </div>
                                <div class="min-block"> 
                                    <div class="round"><img src="<?php echo get_template_directory_uri()?>/img/image 10.png" alt=""></div>
                                    <p>продукт не сертефицируетя,
                                        не имеет срока годности </p>
                                </div>
                                <div class="min-block"> 
                                    <div class="round"><img src="<?php echo get_template_directory_uri()?>/img/image 11.png" alt=""></div>
                                    <p>все состовляющие для успеха
                                        и развития вашего бизнеса</p>
                                </div>
                                <div class="min-block"> 
                                    <div class="round"><img src="<?php echo get_template_directory_uri()?>/img/cardboard-box 1.png" alt=""></div>
                                    <p>полная адаптация цпаковки 
                                        к российскому рынку</p>
                                </div>
                                <div class="min-block temp-block" > 
                                    <div class="round"><img src="<?php echo get_template_directory_uri()?>/img/image 8.png" alt=""></div>
                                    <p>Высокое
                                        качество</p>
                                </div>
                            </div>
                     </div>
                </section>

                <section class="sec-4">
                    <div class="container">
                        <h1>Наша продукция</h1>
                        <div class="block">
                             <?php
                                require_once('cart.php');
                                require_once('function.php');

                                show_cart_main();
                            ?>  
                        </div>
                            <a href="<?php echo get_template_directory_uri()?>/catalog.php">
                                
                                    <button class="btn"> <span>Перейти к каталогу </span></button>
                                
                            </a>
                     </div>
                </section>

                <section class="sec-5">
                    <div class="container">
                            <div class="block">
                                <h1>Вы можете связаться с нами </h1>
                                <div class="text">
                                    <p> Торговая марка Тренди представлена на российском рынке 15 лет .</p>
                                    За это время продукция зарекомендовала себя как высококачественная, проверенная временем.
                                    <p> Благодорим вас, наши постоянные клиенты покупатели, за доверие!</p>
                                    Постараемся и дальше радовать новыми сериями.
                                </div>
                                <a href="#modal"><button class="btn" >оставить заявку</button></a>
                            </div>
                     </div>
                </section>

                <section class="sec-6">
                    <div class="container">
                            <div class="block">
                                <h1>Города в которых мы представленны</h1>
                                    <div class="map">
                                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9b72bf41cb4d65096344b5183848d065c95b6c3d795e53d7c0b9f9393327c274&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>                                    </div>
                            </div>
                     </div>
                </section>

                <section class="sec-7">
                    <div class="container" id="modal">
                            <div class="block">
                                <h1>Вы можете оставить вашу заявку</h1>
                                <?php  require_once('mail.php');?>
                                    <form action="" method="POST">
                                        <input type="tel" placeholder="Телефон"  name="phone">
                                        <input type="email" placeholder="Почта" name="email">
                                        <textarea name="comment" id="" placeholder="Комметарий" cols="30" rows="10"></textarea>
                                        <?php if($error){?> <span style="color:red; position:relative"><?php echo $error ?> </span> <?php } ?></br>
                                        <button class="btn" name="btn-modal">Оставить заявку</button>
                                    </form>
                                    
                             </div>
                        </div>
                </section>
            
        </main>
        <footer>
            <div class="container">
                <div class="block">
                    <img src="<?php echo get_template_directory_uri()?>/img/image 7.svg" alt="">
                    <div class="text">
                        <p> Торговая марка Тренди представлена на российском рынке 15 лет .</p>
                        За это время продукция зарекомендовала себя как высококачественная, проверенная временем.
                        <p> Благодорим вас, наши постоянные клиенты покупатели, за доверие!</p>
                        Постараемся и дальше радовать новыми сериями.
                    </div>
                    <div class="info">
                        <div class="min-block">
                            <img src="<?php echo get_template_directory_uri()?>/img/IMAGE.png" alt="">
                            <div><p>FIND</p> </div>
                            <p>Central Park, Manhattan</p>
                        </div>
                        <div class="min-block">
                            <img src="<?php echo get_template_directory_uri()?>/img/IMAGE (1).png" alt="">
                            <p>EMAIL</p>
                            <p>pompeopotery@gmail.com</p>
                        </div>
                        <div class="min-block">
                            <img src="<?php echo get_template_directory_uri()?>/img/IMAGE (2).png" alt="">
                            <p>CALL</p>
                            <p>+1 292 345 678</p>
                        </div>
                    </div>
                    <div class="admin">
                        <a href="<?php echo get_template_directory_uri()?>/login.php">Admin Only</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <div class="modal" id="modalmain">
        <div class="container modal-container">
                    <div class="block" >
                        <button data-close class="close">
                            <img src="<?php echo get_template_directory_uri()?>/img/Frame 19.png" alt="">
                        </button>
                            <?php  require_once('mail.php');?>
                            <form  class="form" method="POST" >
                                <input type="tel" placeholder="Телефон"  name="phone">
                                <input type="email" placeholder="Почта" name="email">
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
                    <a href="">Главная страница</a>
                    <a href="<?php echo get_template_directory_uri()?>/news.php">Новости</a>
                    <a href="<?php echo get_template_directory_uri()?>/catalog.php">Каталог</a>
                    <a href="#" data-modal="#modalmain">Обратная связь</a>
                </nav>    
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/indexjs.js"></script>
    <?php wp_footer(); ?>
</body>
</html>