<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo=$_SERVER["REQUEST_METHOD"];

require "./controller/SeriesController.php";


if ($rota === "/") {
    require "view/first.php";
    exit();
}
    
if($rota ==="/novo"){
if($metodo == "GET")require "view/lista.php";
if ($metodo =="POST") {
    $controller = new SeriesController();
    $controller->save($_REQUEST);
    };
exit();
}
 if(substr($rota, 0,strlen("/favoritar")) === "/favoritar"){
        $controller= new SeriesController();
        $controller->favorite(basename($rota));
    
   exit();
}
require "view/404.php";