<?php

$bd = new SQLite3("series.db");

$titulo   =$bd->escapeString($_POST["titulo"]);
$sinopse  =$bd->escapeString($_POST["sinopse"]);
$nota     = $bd->escapeString($_POST["nota"]);
$poster   =$bd->escapeString($_POST["poster"]);




if($stmt->execute())
   echo "\nseries inseridas com sucesso\n";
else 
   echo"\nerro ao inserir series.". $bd->lastErrorMsg();
   
header("Location:index.php?msg=Filme+cadastrado+com+sucesso");
?>