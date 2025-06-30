<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="PT-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loja Sportiva / sobre</title>
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
          <li class="active"><a href="about.php">Sobre</a></li>
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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <h3>Sobre a Loja Esportiva <br></h3>
        <p>
        Fundada em 2015, a Loja Esportiva nasceu da paixão pelo esporte e do desejo de transformar o desempenho e o bem-estar de atletas de todos os níveis. Tudo começou com dois amigos, apaixonados por futebol, que perceberam a dificuldade de encontrar produtos de qualidade e atendimento especializado na sua região. Com isso, decidiram criar um espaço onde clientes não apenas comprassem artigos esportivos, mas também recebessem orientação e acompanhamento.<br>
        Ao longo dos anos, a Loja Esportiva se consolidou como referência em produtos para futebol, corrida, academia, natação e diversos outros esportes. Trabalhamos apenas com marcas de confiança, sempre buscando novidades do mercado para oferecer o que há de melhor em tecnologia, conforto e durabilidade.<br><br>
        Nosso objetivo é incentivar pessoas a descobrirem e viverem o prazer do esporte, seja de forma profissional ou amadora. Para isso, além de uma equipe treinada e apaixonada pelo que faz, mantemos um compromisso constante com:<br><br>
        Atendimento personalizado: Ajudamos cada cliente a encontrar o produto certo para sua necessidade.<br><br>
        Variedade e qualidade: Oferecemos uma ampla gama de produtos das melhores marcas.<br><br>
        Preços justos: Acreditamos que o esporte deve ser acessível a todos.<br><br>
        Inovação: Estamos sempre atualizados com as tendências e lançamentos do mercado esportivo.<br><br>
        Na Loja Esportiva, você encontra muito mais que produtos: encontra motivação, conhecimento e apoio para dar o seu melhor em cada treino ou competição. Venha nos conhecer e viva o esporte com a gente!<br><br>

        </p>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
