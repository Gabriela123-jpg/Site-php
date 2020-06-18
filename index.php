<?php include "cabecalho.php"?>
<?php
$bd = new SQLite3("series.db");
$sql = "SELECT *FROM series";
$series = $bd->query($sql);

//$series=[$serie1,$serie2,$serie3];
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
  <!--primeiro card,ainda sera diminuido-->
  <div class="row">
  <?php 
  while($serie =$series->fetchArray()): ?>
   <div class="col s3">
   <div class="card hoverable">
    <div class="card-image">
      <img src="<?=$serie["poster"]?>">
      
      <a class="btn-floating halfway-fab waves-effect waves-light red">
      <i class="material-icons">favorite_border</i></a>
    </div>
    <div class="card-content">
    <p class="valign-wrapper">
    <p> <i class="material-icons yellow-text">star</i><?=$serie["nota"]?></p>
    <span class="card-title"><?=$serie["titulo"]?></span>
      <p><?=$serie["sinopse"]?></p>
    </div>
  </div>
    </div>
    <?php endwhile ?>
   </div>
   


</body>
</html>