<?php
require 'newsletter.php'
 ?>
<!DOCTYPE html>
<html>
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129190826-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date()); gtag('config', 'UA-129190826-1');
  </script>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="./exit-intent/exit-style.css"> -->
   <!-- Este último link está sobrepondo o style.css, fvr ordenar corretamente a leitura de estilos -->
<style>
</style>
</head>

<body>

    <div class="d-flex justify-content-center" style="margin-bottom:0">
     <img src="logo.png" alt="x" height=150 width=200>
  </div>

<nav class="navbar navbar-expand-sm bg-color" style="background-color: #0353d1;">
  <!-- <a class="navbar-brand" href="#">Barra de Navegação</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php">Início</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="home1.php">Artigo #1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home2.php">Artigo #2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home3.php">Artigo #3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home4.php">Artigo #4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home5.php">Artigo #5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home6.php">Artigo #6</a>
      </li>
    </ul>
  </div>

</nav>

<div class="row">
  <!-- <div class="leftcolumn"> -->

    <div class="card">
      <h1>Artigo #4</h1>
      <h2>Como calcular o seguro do seu carro?</h2>
      <!-- Meta description: Diversos fatores são cruzados para definir o valor do seguro de carro. Conheça os 7 pontos que as seguradoras analisam que podem encarecer o serviço. -->
      <h5>São Paulo, Novembro 13, 2018</h5>

      <p>Está na dúvida de como calcular o seguro do seu carro? Existem alguns indicadores que são determinantes para o cálculo do preço final de seu seguro.
Os valores variam bastante de seguradora para seguradora, o mais importante é pesquisar e decidir quais benefícios se adequam melhor a você e ao seu estilo de vida.
Listamos aqui, alguns indicadores:</p><br>
      <img src="" alt="Ops cade a IMAGEM daqui? Informe o Desenvolvedor" height=500px width=100%>
      <p>Além dessas informações, preparamos um material com a média de preço para os carros mais procurados entre os brasileiros.
         Com este material dá para ter uma noção aproximada de valores e fica mais fácil para você pesquisar e negociar o seguro do seu carro.</p>
    </div>

  </div>
  <!-- COLUNA DIREITA -->
  <!-- <div class="rightcolumn"> -->

    <!-- CARTAO "SOBRE MIM" DA COLUNA DIREITA -->
    <!-- <div class="card">
      <h2>Sobre Mim</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Algum texto sobre mim... in culpa qui officia deserunt mollit anim..</p>
    </div> -->
    <!-- <div class="card">
      <h3>Posts Populares</h3>
      <div class="fakeimg">Imagem</div><br>
      <div class="fakeimg">Imagem</div><br>
      <div class="fakeimg">Imagem</div>
    </div> -->

    <!-- CARTAO DE CADASTRO DA COLUNA DIREITA-->
    <!-- <div class="card">
      <h3>Cadastre-se ! ! !<br> Siga o nosso conteúdo!</h3>
      <form action="home2.php" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput3">Nome Completo</label>
          <input type="text" class="form-control" required name="nome" name="name" id="nome" placeholder="Nome">
        <br>
        Estado: <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Escolher...</option>
        <option value="Acre">Acre</option>
        <option value="Alagoas">Alagoas</option>
        <option value="Amapá">Amapá</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Bahia">Bahia</option>
        <option value="Ceará">Ceará</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Espírito Santo">Espírito Santo</option>
        <option value="Goiás">Goiás</option>
        <option value="Maranhão">Maranhão</option>
        <option value="Mato Grosso">Mato Grosso</option>
        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
        <option value="Minas Gerais">Minas Gerais</option>
        <option value="Pará">Pará</option>
        <option value="Paraíba">Paraíba</option>
        <option value="Paraná">Paraná</option>
        <option value="Pernambuco">Pernambuco</option>
        <option value="Piauí">Piauí</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
        <option value="Rondônia">Rondônia</option>
        <option value="Roraima">Roraima</option>
        <option value="Santa Catarina">Santa Catarina</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Sergipe">Sergipe</option>
        <option value="Tocantins">Tocantins</option>
        </select><br><br>
        <div class="form-group">
          <label for="exampleFormControlInput3">Endereço de email</label>
          <input type="email" class="form-control" required name="email" name="email" id="email" placeholder="nome@exemplo.com">
        </div>
        <br>
        <br>
        <button class="btn btn-primary" type="submit" id="newletter">Enviar</button>
      </form>
    </div>
  </div>
</div> -->

<div class="footer" style="width:100%">
  <h7>Copyright</h7>
</div>


  <!-- <div id="news-signup">
    <div class="wrapper">
      <div id="news-signup_close"></div>
      <div class="newsletter-content" id="phplistsubscriberesult">
        <h2>Quer ficar por dentro das melhores dicas para Seguro?</h2>

        <p>Deixe seu e-mail e nós enviaremos tudo que você precisa saber!</p>
        <form class="signup-form" id="signup-form" action="home.php" method="POST">
        <p>
          <input type="text" required name="name" id="news_signup_name" value="" placeholder="Digite seu Nome" autofocus>
        </p>
        <p>
            <input type="text" required name="email" id="news_signup_email" value="" placeholder="Digite seu e-mail">
          </p>
          <p class="button">
            <input type="submit" value="INSCREVER-SE">
          </p>
        </form>
        <p class="footnote">Nós também odiamos SPAM. Você pode escolher para de receber a qualquer momento</p>
      </div>
    </div>
  </div> -->

<script src="myscript.js"></script>
<!-- <script src="./exit-intent/exit-script.js"></script> -->
</body>
</html>
