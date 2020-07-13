<?php
require "./repository/SeriesRepositoryPDO.php";
require "./model/serie.php";


class SeriesController{

  public function index(){
  $seriesRepository = new SeriesRepositoryPDO();
  return $seriesRepository->listarTodos();

}
  public function save($request){
    
$seriesRepository= new SeriesRepositoryPDO();
$serie= (object) $request;

$upload= $this->savePoster($_FILES);

if(gettype ($upload)=="string"){
  $serie->poster = $upload;
}

if($seriesRepository->salvar($serie))
  $_SESSION["msg"] = "Serie cadastrada com sucesso";
else 
$_SESSION["msg"] ="Erro ao inserir serie";
   
header("Location:/");

}
private function savePoster($file){
  $posterDir = "imagens/posters/";
  $posterPath = $posterDir . basename($file["poster_file"]["name"]);
  $posterTmp = $file["poster_file"]["tmp_name"];
  if (move_uploaded_file($posterTmp, $posterPath)){
    return $posterPath;
} else {
    return false;
}
  }

  public function favorite(int $id){
    $seriesRepository = new SeriesRepositoryPDO();
    $result=['success'=>$seriesRepository->favoritar($id)];
   
    header('Content-type:application/json');
   echo json_encode($result);
  }


}

?>