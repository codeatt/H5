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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   <!-- <link rel="stylesheet" href="./exit-intent/exit-style.css"> -->
   <!-- Este último link está sobrepondo o style.css, fvr ordenar corretamente a leitura de estilos -->
<style>
</style>

<!-- JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".fadeout").click(function(){
        $(".cadastro").fadeOut()
    });
    $(".fadein").click(function(){
        // $(".cadastro").fadeIn();
        $(".cadastro").show();
    });
    $(".fadein2").click(function(){
        // $(".cadastro").fadeIn();
        $(".cadastro2").show();
    });
});
</script>
<!-- <script
			  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous">
</script> -->
</head>

<body>

    <div class="d-flex justify-content-center" style="margin-bottom:0">
     <img src="logo.png" alt="x" height="200px;" width="200px;">
  </div>
  <br>

<nav class="navbar navbar-expand-sm bg-color" style="background-color: white;">
  <!-- <a class="navbar-brand" href="#">Barra de Navegação</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->

  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <!-- SUGESTAO HREF : COLOCAR PAGINA EXTRA PARA CADASTRO OU DIRECIONAR A LINHA DE CLICAR PARA CADASTRAR JA TRANSFORMANDO DE HIDDEN PARA SHOW -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#.php">Início</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="ana1.php">Artigo #1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ana2.php">Artigo #2</a>
      </li>
    </ul>
  </div>

</nav>

<div class="row">
  <!-- A DIV ABAIXO substitui a DIV com class="leftcolumn" -->
  <div>
  <!-- COLUNA ESQUERDA CASO SEJA NECESSARIO -->
  <!-- <div class="leftcolumn"> -->

    <div class="card">
      <h2>Ao comprar um seguro, seu cérebro já decidiu 10 segundos antes de você saber disso</h2>
      <h5>São Paulo, Novembro 13, 2018</h5>
      <img src="2.jpg" alt="Cade a imagem que estava aqui? =O" style="max-width: 100%">

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

Gostou do conteúdo? Para ler mais sobre clique  <button class="fadein btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">AQUI</button>
<!-- <button class="fadeout">Fade out</button> -->
</p>
       <div style="display: none;" class="cadastro"id="news-signup">
         <div class="wrapper">
           <div id="news-signup_close"></div>
           <div class="newsletter-content" id="phplistsubscriberesult">
             <h2>Quer ficar por dentro das melhores dicas para Seguro?</h2>

             <p>Deixe seu e-mail e nós enviaremos tudo que você precisa saber!</p>

             <!-- <form class="signup-form" id="signup-form" action="home.php" method="POST">
             <p>
               <input type="text" required name="name" id="news_signup_name" value="" placeholder="Digite seu Nome" autofocus>
             </p>
             <p>
                 <input type="text" required name="email" id="news_signup_email" value="" placeholder="Digite seu e-mail">
               </p>
               <p class="button">
                 <input type="submit" value="INSCREVER-SE">
               </p>
             </form> -->
             <form action="home1.php" method="post">
               <div class="form-group">
                 <label for="exampleFormControlInput3">Nome Completo</label>
                 <input type="text" class="form-control" required name="nome" name="name" id="nome" placeholder="Nome">
               <br>
               Estado: <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="regiao" id="regiao" required>
               <option value="Acre">Acre</option>
               <option value="Alagoas">Alagoas</option>
               <option value="Amapa">Amapá</option>
               <option value="Amazonas">Amazonas</option>
               <option value="Bahia">Bahia</option>
               <option value="Ceara">Ceará</option>
               <option value="Distrito Federal">Distrito Federal</option>
               <option value="Espirito Santo">Espírito Santo</option>
               <option value="Goias">Goiás</option>
               <option value="Maranhao">Maranhão</option>
               <option value="Mato Grosso">Mato Grosso</option>
               <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
               <option value="Minas Gerais">Minas Gerais</option>
               <option value="Para">Pará</option>
               <option value="Paraiba">Paraíba</option>
               <option value="Parana">Paraná</option>
               <option value="Pernambuco">Pernambuco</option>
               <option value="Piaui">Piauí</option>
               <option value="Rio de Janeiro">Rio de Janeiro</option>
               <option value="Rio Grande do Sul">Rio Grande do Sul</option>
               <option value="Rio Grande do Norte">Rio Grande do Norte</option>
               <option value="Rondonia">Rondônia</option>
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
               <button  href="home1.php" class="btn btn-primary" type="submit" id="newletter">Enviar</button>
             </form>

             <p class="footnote">Nós também odiamos SPAM. Você pode se descadastrar a qualquer momento!</p>
           </div>
         </div>
       </div>
    </div>

    <div class="card">
      <h2>7 fatores que podem encarecer o seguro de carro</h2>
      <h5>São Paulo, Novembro 13, 2018</h5>
      <img src="1.jpg" alt="x" style="max-width: 100%;">
      <p>A contratação de um seguro de carro é motivo de dor de cabeça para muitas pessoas.
        Afinal, trata-se de um serviço cada vez mais caro.
        Não existe uma tabela fixa de preços, mas uma série de fatores podem influenciar no valor.
        Pessoas que moram em cidades mais violentas, por exemplo, podem pagar mais caro.<br><br>

        Uma estudo divulgado pelo ComparaOnline, marketplace de comparação de seguros e produtos financeiros,
        mostrou que o preço dos seguros de carro aumentaram cerca de  11%.
        Em 2017 o valor girava em torno de R$ 1.920. Já em 2018 subiu para R$ 2.131.
        No entanto, a média nacional se manteve estável, cerca de R$ 1.839,32.<br><br>

        Gostou do conteúdo? Para ler mais sobre clique  <button class="fadein2 btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">AQUI</button>
        <div style="display: none;" class="cadastro2"id="news-signup">
          <div class="wrapper">
            <div id="news-signup_close"></div>
            <div class="newsletter-content" id="phplistsubscriberesult">
              <h2>Quer ficar por dentro das melhores dicas para Seguro?</h2>

              <p>Deixe seu e-mail e nós enviaremos tudo que você precisa saber!</p>


              <!-- <form class="signup-form" id="signup-form" action="home.php" method="POST">
              <p>
                <input type="text" required name="name" id="news_signup_name" value="" placeholder="Digite seu Nome" autofocus>
              </p>
              <p>
                  <input type="text" required name="email" id="news_signup_email" value="" placeholder="Digite seu e-mail">
                </p>
                <p class="button">
                  <input type="submit" value="INSCREVER-SE">
                </p>
              </form> -->
              <form action="home2.php" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput3">Nome Completo</label>
                  <input type="text" class="form-control" required name="nome" name="name" id="nome" placeholder="Nome">
                <br>
                Estado: <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="regiao" id="regiao" required>
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
                <button  href="home1.php" class="btn btn-primary" type="submit" id="newletter">Enviar</button>
                                </div>

              </form>

                
              <p class="footnote">Nós também odiamos SPAM. Você pode se descadastrar a qualquer momento!</p>
          </div>
        </div>
        </div>
      </div>
      </p>
      
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
  <h7> Todos os direitos reservados - Desenvolvido por High Five Group - 2018</h7>
</div>

<!-- Esse formulario de cadastro fadein não permite edição em seu js, por isso está comentado -->
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

<!-- <script src="myscript.js"></script> -->
<!-- <script src="./exit-intent/exit-script.js"></script> -->
</body>
</html>
