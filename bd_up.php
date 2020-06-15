<?php
$bd = new SQLite3("series.db");
$sql= "DROP TABLE IF EXISTS series";
if($bd-> exec($sql))
  echo"\ntabela apagada\n";
$sql = "CREATE TABLE series(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )
";
if ($bd->exec($sql))
   echo"\ntabela series criada\n";
else 
   echo"\n erro ao criar tabela series\n";
  $sql ="INSERT INTO  series(id,titulo,poster,sinopse,nota)VALUES(
    0,
    'L.A Finest',
    'https://image.tmdb.org/t/p/original/p31nkdkvVMyyzYZL1lz1ZDu7Q9p.jpg',
    'Syd Burnett has left her complicated past behind to become an LAPD detective. Paired with a new partner, Nancy McKenna, a working mom with an equally complex past, Syd is pushed to examine whether her unapologetic lifestyle might be masking a greater personal secret. These two women don't agree on much, but they find common ground when it comes to taking on the most dangerous criminals in Los Angeles.',
    10,
    )";


?>      