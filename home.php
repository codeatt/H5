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
  $content[] = $data;
  $content = json_encode($content);
  file_put_contents($fileName, $content);

}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
</style>
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>FiveSeg</h1>
    <p>...</p>
  </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Barra de Navegação</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
      </li>
    </ul>
  </div>

</nav>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Cabeçalho</h2>
      <h5>São Paulo, Novembro 12, 2018</h5>
      <div class="fakeimg" style="height:200px;">Imagem</div>
      <p>Algum texto..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>Rubrica do Título</h2>
      <h5>São Paulo, Novembro 12, 2018</h5>
      <div class="fakeimg" style="height:200px;">Imagem</div>
      <p>Algum texto..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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
  <h2>Rodapé</h2>
</div>

<script src="myscript.js"></script>
</body>
</html>
