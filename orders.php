<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="PT-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja Sportiva / Pedidos</title>
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
        <ul class="right">
          <li><a href="about.php">Sobre</a></li>
          <li><a href="products.php">Produtos</a></li>
          <li><a href="cart.php">Carrinho</a></li>
          <li class="active"><a href="orders.php">Pedidos
          </a></li>
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




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Pedidos Finalizados</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<p><h4>ID do Pedido:'.$obj->id.'</h4></p>';
              echo '<p><strong>Data da Compra</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Codigo do Produto</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Nome do Produto</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Preço Unitario</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Quantidade Comprada</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Valor Total</strong>: $'.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
