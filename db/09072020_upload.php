<?php
$bd = new mysql("./db/series.db");
$sql= "ALTER TABLE series ADD COLUMN favorito INT DEFAULT 0 ";

if($bd-> exec($sql))
  echo"\ntabela series alterada com sucesso\n";
  else
  echo "\erro ao alterar tabela series\n";