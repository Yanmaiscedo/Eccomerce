<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="PT-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja Sportiva</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Loja Sportiva</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">Sobre</a></li>
          <li><a href="products.php">Produtos</a></li>
          <li><a href="cart.php">Carrinho</a></li>
          <li><a href="orders.php">Pedidos</a></li>
          <li><a href="contact.php">Contato</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Minha Conta</a></li>';
            echo '<li><a href="logout.php">Sair</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
            echo '<li><a href="register.php">Registrar</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

    <a href="products.php">
     <img data-interchange="[images/corredor2.jpg, (retina)], [images/corredor2.jpg, (large)], [images/corredor2.jpg, (mobile)], [images/corredor2.jpg, (medium)]">
    <noscript><img src="images/corredor2.jpg"></noscript>
    </a>
    <a href="products.php">

     <img data-interchange="[images/Volei2.jpg, (retina)], [images/Volei2.jpg, (large)], [images/Volei2.jpg, (mobile)], [images/Volei2.jpg, (medium)]">
    <noscript><img src="images/Volei2.jpg"></noscript>
    </a>
    <a href="products.php">

     <img data-interchange="[images/alongando.jpg, (retina)], [images/alongando.jpg, (large)], [images/alongando.jpg, (mobile)], [images/alongando.jpg, (medium)]">
    <noscript><img src="images/alongando.jpg"></noscript>
    </a>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:1.8em;">O Sport salva vidas</p>
        </footer>
      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
