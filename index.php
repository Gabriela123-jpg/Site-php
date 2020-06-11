<?php include "cabecalho.php"?>
<?php
$serie1=[
  "titulo"=>"L.A Finest",
  "nota"=>10,
  "sinopse"=>"Syd Burnett has left her complicated past behind to become an LAPD detective. Paired with a new partner, Nancy McKenna, a working mom with an equally complex past, Syd is pushed to examine whether her unapologetic lifestyle might be masking a greater personal secret. These two women don't agree on much, but they find common ground when it comes to taking on the most dangerous criminals in Los Angeles.",
  "poster"=>"https://image.tmdb.org/t/p/original/p31nkdkvVMyyzYZL1lz1ZDu7Q9p.jpg",
];
$serie2=[
  "titulo"=>"Law & Order",
  "nota"=>10,
  "sinopse"=>"In the criminal justice system, sexually-based offenses are considered especially heinous. In New York City, the dedicated detectives who investigate these vicious felonies are members of an elite squad known as the Special Victims Unit. These are their stories..",
  "poster"=>"https://image.tmdb.org/t/p/original/yzMQBlirydvKp4Zgr5FbXlsrRmw.jpg",
];
$serie3=[
  "titulo"=>"Legend's of Tomorrow",
  "nota"=>10,
  "sinopse"=>"When heroes alone are not enough ... the world needs legends. Having seen the future, one he will desperately try to prevent from happening, time-traveling rogue Rip Hunter is tasked with assembling a disparate group of both heroes and villains to confront an unstoppable threat — one in which not only is the planet at stake, but all of time itself. Can this ragtag team defeat an immortal threat unlike anything they have ever known?",
  "poster"=>"https://image.tmdb.org/t/p/original/eHs0PYBVGP3rv86UySmPOMf2b5F.jpg",
];
$series=[$serie1,$serie2,$serie3];
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
 foreach($series as $serie): ?>
 <div class="col s3">
 <div class="card hoverable">
    <div class="card-image">
      <img src="<?=$serie["poster"]?>">
      
      <a class="btn-floating halfway-fab waves-effect waves-light red">
      <i class="material-icons">favorite_border</i></a>
    </div>
    <div class="card-content">
    <p class="valign-wrapper">
    <p> <i class="material-icons yellow-text">star</i><?=$serie["notas"]?></p>
    <span class="card-title"><?=$serie["titulo"]?></span>
      <p><?=$serie["sinopse"]?></p>
    </div>
  </div>
 </div>
  <?php endforeach ?>
 
 

  


</body>
</html>