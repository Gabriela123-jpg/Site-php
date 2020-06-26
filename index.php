<?php include "cabecalho.php"?>
<?php
session_start();

require "./repository/SeriesRepositoryPDO.php";
require "./util/mensagem.php";
$seriesRepository = new SeriesRepositoryPDO();
$series = $seriesRepository->listarTodos();

?>
<body>

<nav id="menu" class="nav-extended" >
    <div class="nav-wrapper"> 
  <a class="brand-logo center"><h1>Ursal</h1></a>  
      <ul id="nav-mobile" class="right ">
      
        <li><a class="active" href="index.php">Galeria</a></li>
        <li><a class="active" href="lista.php">Cadastre</a></li>
        <div class="nav-content">
       </ul>
    </div>
  
    <div class="nav-content" >
      <ul class="tabs tabs-transparent">
        <li class="tab"><a  class="active" href="#test1">Ja assistido</a></li>
        <li class="tab"><a class="active" href="#test2">Todos</a></li>
        <li class="tab"><a class="active" href="#test3">Sua lista</a></li>
      
      </ul>
    </div>
  </nav>
  <div class="container">
  <!--primeiro card,ainda sera diminuido-->
  <div class="row">
  <?php foreach($series as $serie): ?>
   <div class="col s12 m6 l4">
   <div class="card hoverable">
    <div class="card-image">
      <img src="<?=$serie->poster?>">
      
      <a class="btn-floating halfway-fab waves-effect waves-light red">
      <i class="material-icons">favorite_border</i></a>
    </div>
    <div class="card-content">
    <p class="valign-wrapper">
    <p> <i class="material-icons yellow-text">star</i><?=$serie->nota?></p>
    <span class="card-title"><?= $serie->titulo?></span>
      <p><?=$serie->sinopse?></p>
    </div>
  </div>
    </div>
     <?php endforeach ?>
   </div>
   </div>
<?= Mensagem::mostrar();?>

</body>

</html>