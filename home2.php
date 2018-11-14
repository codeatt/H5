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
      <h2>7 fatores que podem encarecer o seguro de carro</h2>
      <!-- Meta description: Diversos fatores são cruzados para definir o valor do seguro de carro. Conheça os 7 pontos que as seguradoras analisam que podem encarecer o serviço. -->
      <h5>São Paulo, Novembro 13, 2018</h5>
       <img src="1.jpg" alt="Ops cade a IMAGEM daqui? Informe o Desenvolvedor" height=500px width=100%>
      <p>A contratação de um seguro de carro é motivo de dor de cabeça para muitas pessoas.
        Afinal, trata-se de um serviço cada vez mais caro.
        Não existe uma tabela fixa de preços, mas uma série de fatores podem influenciar no valor.
        Pessoas que moram em cidades mais violentas, por exemplo, podem pagar mais caro.<br><br>

        Uma estudo divulgado pelo ComparaOnline, marketplace de comparação de seguros e produtos financeiros,
        mostrou que o preço dos seguros de carro aumentaram cerca de  11%.
        Em 2017 o valor girava em torno de R$ 1.920. Já em 2018 subiu para R$ 2.131.
        No entanto, a média nacional se manteve estável, cerca de R$ 1.839,32.<br><br>

        <b>Mas quais são os demais fatores que podem encarecer o seguro de carro?</b><br><br>

        <b>1 - Idade</b><br>
        Condutores que têm entre 18 e 25 anos pagam mais caro por conta do índice de
        sinistralidade, que é maior entre os mais jovens. Ou seja, a partir dos 25 anos o seguro fica
        mais barato. Ter mais de dez anos de habilitação também pode render um desconto.<br><br>

        Um outro ponto que interfere no valor é o motorista morar ou dividir o carro com jovens
        adultos, pois eles podem usar o veículo eventualmente. As seguradoras entendem que esse
        fator aumenta o risco de acidentes.<br><br>

        <img src="2.jpg" alt="Ops cade a IMAGEM daqui? Informe o Desenvolvedor" height=500px width=100%>

        <b>2 - Gênero</b><br>
        Muitas pessoas consideram as mulheres piores motoristas do que os homens. No entanto,
        essa regra não vale para as seguradoras. Segundo dados do Departamento Nacional de
        Trânsito (Denatran), dos 45 milhões de motoristas no Brasil, quase 30 milhões são do sexo
        masculino. De acordo com os números 71% dos acidentes do País são provocados pelos
        homens. E 70% das multas registradas são para motoristas do sexo masculino. Segundo o
        Censo do IBGE 2010, a população brasileira é composta por 49% de homens e 51% de
        mulheres.<br><br>

        Especialistas apontam que, normalmente, os homens são mais impacientes ao volante e
        menos atentos. Atitudes como o não uso de cinto de segurança, ultrapassagens perigosas e
        utilização de celulares são frequentes causas de acidentes. Por isso, os motoristas do sexo
        masculino pagam mais caro no serviço.<br><br>

        <b>3- Estado civil</b><br>
        As seguradoras consideram que pessoas solteiras ou divorciadas possuem uma vida social
        mais agitada. E a utilização do carro à noite pode significar um risco, principalmente na volta
        de bares e casas noturnas. Ou seja, um relacionamento estável pode significar um desconto
        na hora de fechar negócio.<br><br>

        <b>4 - Idade dos filhos</b><br>
        Filhos menores de idade reduzem o valor do seguro de carro. As seguradoras entendem que
        pessoas que costumam carregar crianças no carro dirigem com mais cautela.<br><br>

        <b>5 - Frequência</b><br>
        Os motoristas que usam o carro esporadicamente são bonificados com um desconto
        considerável. Já os que dependem do veículo para trabalhar tendem a pagar mais caro, pois
        o risco de acidentes, furtos e roubos é maior.<br><br>

        <b>6 - Local de estacionamento</b><br>
        Parar o carro na rua pode significar um acréscimo no seguro. Se o bairro em que o veículo
        fica estacionado, tanto em casa como no trabalho, tiver altos índices de roubo e furto, a
        seguradora pode, inclusive, recusar o cliente.<br><br>

        <b>7 - Tipo de carro</b><br>
        Modelos mais visados por ladrões ou veículos que apresentam mais dificuldade de conserto,
        como peças importadas ou os antigos e fora de linha, podem carecer o seguro.
        Carros blindados ou importados com mais de cinco anos, não são aceitos por todas as
        seguradoras e quando são aceitos, possuem um valor bem elevado.<br><br>

        <b>Seguro de carro: não caia na tentação de omitir informações</b><br>
        Muitos condutores, após descobrir os fatores que influenciam no valor do seguro do carro,
        podem acreditar que omitir algumas informações, como um condutor secundário ou local
        de estacionamento, podem ajudar a pagar mais barato. . No entanto, as seguradoras fazem
        investigações para apurar o sinistro. E, se descoberta a desconexão de informações,
        certamente a indenização não será paga.<br><br>

        <!-- Gostou do nosso conteúdo? Assine a nossa newsletter! -->

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
      <form action="home2.php" method="post">
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
