<?php
$bd = new SQLite3("series.db");
$sql= "DROP TABLE IF EXISTS series";

if($bd-> exec($sql))
  echo"\ntabela apagada\n";

$sql = "CREATE TABLE series (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL(3,1),
    favorito INT DEFAULT 0
    )
";

if ($bd->exec($sql))
   echo"\ntabela series criada\n";
else 
   echo"\n erro ao inseri series\n";

$sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
    'L.A Finest',
    'https://image.tmdb.org/t/p/original/p31nkdkvVMyyzYZL1lz1ZDu7Q9p.jpg',
    'Syd Burnett has left her complicated past behind to become an LAPD detective. Paired with a new partner, Nancy McKenna, a working mom with an equally complex past, Syd is pushed to examine whether her unapologetic lifestyle might be masking a greater personal secret. These two women don''t agree on much, but they find common ground when it comes to taking on the most dangerous criminals in Los Angeles',
    10.0
    )";
if($bd->exec($sql))
   echo "\nseries inseridas com sucesso\n";
else 
   echo"\nerro ao inserir series\n";

   $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
    'Law and Order',
    'https://image.tmdb.org/t/p/original/yzMQBlirydvKp4Zgr5FbXlsrRmw.jpg',
    'In the criminal justice system, sexually-based offenses are considered especially heinous. In New York City, the dedicated detectives who investigate these vicious felonies are members of an elite squad known as the Special Victims Unit. These are their stories',
    10.0
    )";
if($bd->exec($sql))
   echo "\nseries inseridas com sucesso\n";
else 
   echo"\nerro ao inserir series\n";
   $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
    'Legends of Tomorrow',
    'https://image.tmdb.org/t/p/original/eHs0PYBVGP3rv86UySmPOMf2b5F.jpg',
    'When heroes alone are not enough ... the world needs legends. Having seen the future, one he will desperately try to prevent from happening, time-traveling rogue Rip Hunter is tasked with assembling a disparate group of both heroes and villains to confront an unstoppable threat — one in which not only is the planet at stake, but all of time itself. Can this ragtag team defeat an immortal threat unlike anything they have ever known?',
    10.0
    )";
if($bd->exec($sql))
   echo "\nseries inseridas com sucesso\n";
else 
   echo"\nerro ao inserir series\n";
   $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
      'Once Upon a Time',
      'https://image.tmdb.org/t/p/original/xo62QUB9d6yqt1RgTicdbWhgNQx.jpg',
      'There is a town in Maine where every story book character you''ve ever known is trapped between two worlds, victims of a powerful curse. Only one knows the truth and only one can break the spell.',
      7.0
      )";
  if($bd->exec($sql))
     echo "\nseries inseridas com sucesso\n";
  else 
     echo"\nerro ao inserir series\n";
     $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
      'One Day at Time',
      'https://image.tmdb.org/t/p/original/cXINQ2NSORe0r55MRI8ziT2HHfU.jpg',
      'In a reimagining of the TV classic, a newly single Latina mother raises her teen daughter and tween son with the help of her old-school mom.',
      8.0
      )";
  if($bd->exec($sql))
     echo "\nseries inseridas com sucesso\n";
  else 
     echo"\nerro ao inserir series\n";
 
     $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
      'O Mecanismo',
      'https://image.tmdb.org/t/p/original/y0ZfBvOG99xqlPUDWqAdGfcdj1R.jpg',
      'Marco Ruffo, é um delegado da Polícia Federal obcecado pelo caso que está investigando. Quando menos espera, ele e sua aprendiz, Verena Cardoni, já estão mergulhados em uma das maiores investigações de desvio e lavagem de dinheiro da história do Brasil.',
      8.0
      )";
  if($bd->exec($sql))
     echo "\nseries inseridas com sucesso\n";
  else 
     echo"\nerro ao inserir series\n";
     
     $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
      'Orange is the New Black',
      'https://image.tmdb.org/t/p/original/ekaa7YjGPTkFLcPhwWXTnARuCEU.jpg',
      'A crime she committed in her youthful past sends Piper Chapman to a women''s prison, where she trades her comfortable New York life for one of unexpected camaraderie and conflict in an eccentric group of fellow inmates.',
      5.5
      )";
  if($bd->exec($sql))
     echo "\nseries inseridas com sucesso\n";
  else 
     echo"\nerro ao inserir series\n";
     
     $sql ="INSERT INTO series (titulo,poster,sinopse,nota)VALUES(
      'Orphan Black',
      'https://image.tmdb.org/t/p/original/7hQKcjsYPnNGhxE7JGp2o4sTuPr.jpg',
      'A streetwise hustler is pulled into a compelling conspiracy after witnessing the suicide of a girl who looks just like her.',
      8.0
      )";
  if($bd->exec($sql))
     echo "\nseries inseridas com sucesso\n";
  else 
     echo"\nerro ao inserir series\n";     
  



/*
$sql = "SELECT * FROM series";
$rs = $bd->query($sql);
while($serie = $rs->fetchArray()){
  print_r($serie);
}*/
?>      