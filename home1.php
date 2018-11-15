<?php
require 'newsletter.php'
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

<nav class="navbar navbar-expand-sm bg-color" style="background-color: #0353d1;">
  <!-- <a class="navbar-brand" href="#">Barra de Navegação</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Início</a>
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
órgão mais sensível do ser humano: o bolso! (kkk). Por isso a reação à gastos é uma
resposta à ameaça. É o seu cérebro primitivo reagindo exatamente como nas
cavernas (só que 300 mil anos depois!). E sabe por que isso acontece? É que a
atividade cerebral que experimentamos na dor é 2 vezes e meia mais forte que a do
prazer! Portanto é natural que se tenha mais gente tentando evitar erros do que
buscando acertar!<br><br>

Tá, e o que isso tem a ver comigo? Carro, gastos inesperados, meu cérebro... pah...<br><br>

A boa notícia é que você pode evitar essa dor e buscar o prazer, simplesmente
evitando gastos inesperados. Mas espere, se eles são inesperados, como vou evitá-
los? Simples. Uma solução é não sair mais de carro (risos!). A outra é contratar um
bom seguro de automóvel.<br><br>

Uma curiosidade. Há quem diga que a compra de um seguro é algo estritamente
racional e lógico. Mas, na verdade é só o jeito da gente justificar racionalmente nossa
decisão emocional. Hã? Isso mesmo, você compra um seguro não porque você economiza, deixa de gastar ou evita acidentes (são recompensas!). Você compra um
seguro, com 85% da sua decisão sendo emocional (resposta à ameaça!).<br><br>

Seu cérebro primitivo, o reptiliano, decide uma compra cerca de 10 segundos antes
de você estar consciente de sua decisão. Ele considerou basicamente fatores nada
racionais, que são reprodução e sobrevivência. No caso da reprodução, sem o seu
carro, suas chances de “azarar” caem drasticamente e de ter filhos e deixá-los como
legado para o mundo se esgotam. No caso de sobrevivência, seu medo gritará mais
alto que você, quando imaginar que pode sentir-se “excluído” da sociedade e
experimentar uma reação cerebral idêntica à uma dor física 3 ,ou, até mesmo,
imaginar-se mais perto da morte lhe traz a mesma sensação!<br><br>

É isso que te faz comprar um seguro, seu instinto de proteção e sobrevivência, seu
lado primitivo!<br><br>

Assim, evite ficar fugindo da dor dos gastos inesperados e busque o prazer fazendo
um seguro para seu carro hoje!<br><br>

Se esse texto fez sentido para você, deixe seu melhor e-mail aqui e receba mais
informações e dicas de como contratar um bom seguro.<br><br>

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
      <form action="home1.php" method="post">
        Nome: <input type="text" required name="nome" name="name" placeholder="Digite seu nome aqui..." id="nome"><br>
        <br>
        Estado: <input type="text" required name="estado" name="estado" placeholder="Digite seu estado aqui..." id="estado"><br>
        <br>
        <!-- Necessário atualizar para lista de estados -->
        E-mail: <input type="email" required name="email" name="email" placeholder="Digite seu e-mail aqui..." id="email"><br>
        <br>
        <button class="btn btn-primary" type="submit"  id="newletter">Enviar</button>
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
