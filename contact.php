<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="PT-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja Sportiva / Contato</title>
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
          <li class="active"><a href="contact.php">Contato</a></li>
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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p>Email para contato: <a href="mailto:LojaSportiva@99.com">LojaSportiva@99.com</a></p>
        <p>Telefone para contato: <a href="(99)99999-9999">(99)99999-9999</a></p>
        <p>Instagram para contato: <a href="https://www.instagram.com/">usuario.loja</a></p>
        <p>Endereço Principal: <a href="https://www.google.com/maps">Rua tal 999</a></p>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
