<?php
session_start();
require "./repository/SeriesRepositoryPDO.php";
require "./repository/serie.php";
$seriesRepository= new SeriesRepositoryPDO();
$serie= new Serie();

$serie->titulo =$_POST["titulo"];
$serie->sinopse = $_POST["sinopse"];
$serie->nota = $_POST["nota"];
$serie->poster =$_POST["poster"];

if($seriesRepository->salvar($serie))
  $_SESSION["msg"] = "Serie cadastrada com sucesso";
else 
$_SESSION["msg"] ="Erro ao inserir serie";
   
header("Location:index.php");
?>