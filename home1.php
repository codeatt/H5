<?php
if($_POST){
  $fileName = 'newsletter.json';
  if(file_exists($fileName)){
    $content = file_get_contents($fileName);
    $content = json_decode($content, true);

  } else {
    $content = [];
  }
  $data = $_POST;
  $data['data-hora'] = date("Y-m-d H:i:s");
  $data['ip'] = getIP();
  $content[] = $data;
  $content = json_encode($content);
  file_put_contents($fileName, $content);
}

function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    { $ip=$_SERVER['HTTP_CLIENT_IP']; }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
    else
    { $ip=$_SERVER['REMOTE_ADDR']; }
    return $ip;
}

?>
<!DOCTYPE html>
<html>
<head>
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- <a class="navbar-brand" href="#">Barra de Navegação</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home1.php">Artigo 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home2.php">Artigo 2</a>
      </li>
    </ul>
  </div>

</nav>

<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <h2>Ao comprar um seguro, seu cérebro já decidiu 10 segundos antes de você saber disso</h2>
      <h5>São Paulo, Novembro 13, 2018</h5>
      <div class="fakeimg" style="height:200px;">Imagem</div>

      <p>Pasme! Só em 2018, +15 milhões 1 de famílias passaram a ter problemas financeiros.
São 27 milhões de famílias ao todo enfrentando desemprego, inadimplência e
restrições de orçamento.<br><br>
   E, por estarem nesse “clube de (des)vantagens” essas famílias tem um inimigo mortal:
os gastos inesperados! E estes podem surgir por problemas de saúde, juros, etc., mas
quase sempre é por um bem que é conhecido por “gastar como uma família”: o seu
carro. Porque eu digo isso? É que em meio à esse tsunami financeiro, a venda 2 de
carros financiados voltou a crescer no Brasil e o risco de mais pessoas se afundarem
é iminente.<br><br>
   E por que isso é tão aterrorizante? Vamos usar a neurociência para explicar. É que
nosso cérebro social reage de duas formas aos estímulos do ambiente: resposta à
recompensa ou à ameaça, e falando de gastos inesperados, estamos falando do
órgão mais sensível do ser humano...<br><br>

Gostou do conteúdo? Cadastre-se para receber as últimas notícias!
       </p>
    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Sobre Mim</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Algum texto sobre mim... in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Posts Populares</h3>
      <div class="fakeimg">Imagem</div><br>
      <div class="fakeimg">Imagem</div><br>
      <div class="fakeimg">Imagem</div>
    </div>
    <div class="card">
      <h3>Cadastre-se ! ! !<br> Siga o nosso conteúdo!</h3>
      <form action="home.php" method="post">
        Nome: <input type="text" required name="nome" name="name" placeholder="Digite seu nome aqui..." id="nome"><br>
        <br>
        E-mail: <input type="email" required name="email" name="email" placeholder="Digite seu e-mail aqui..." id="email"><br>
        <br>
        <button type="submit"  id="newletter">Enviar</button>
      </form>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Copyright</h2>
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
