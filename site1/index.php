<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIte 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <header class=" col-sm-12 col-md-12 col-lg-12 "> 


            </header>
        </div>


        <div class="row">
                <nav class=" col-sm-12 col-md-12 col-lg-12 "> 
                    <?php  require_once('pages/menu.php'); 
                      require_once('pages/functions.php') ?>
                </nav>
        </div>

        <div class="row">
                <section class=" col-sm-12 col-md-12 col-lg-12 "> 
                  <?php  

                    $page = (isset($_GET['page'])) ? $_GET['page']:1;

                      switch ($page) {
                          
                          case '1':
                            require_once('pages/home.php');
                              break;

                              case '2':
                                require_once('pages/upload.php');
                                break;

                                case '3':
                                    require_once('pages/gallery.php');
                                    break;

                                    case '4':
                                        require_once('pages/registration.php');
                                        break;
                                        
                                  
                          default:
                          echo '<h1> 404 PAGE NOT FOUND</h1>';
                          break;
                      }
                     



                  ?>
                </section>
        </div>




    </div>

</body>
</html>