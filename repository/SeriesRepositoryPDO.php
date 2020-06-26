<?php
require "conexao.php";
class SeriesRepositoryPDO{

    private $conexao;
    public function __construct(){
     $this->conexao = Conexao::criar();
    }
    
    public function listarTodos():array{
       $seriesLista = array();

        $sql = "SELECT * FROM series";
        $series = $this->conexao->query($sql);
        while($serie =$series->fetchObject()){
            array_push($seriesLista, $serie);
        }
       return $seriesLista;
    }
    public function salvar(Serie $serie):bool{
$sql ="INSERT INTO series (titulo,poster,sinopse,nota)
VALUES (:titulo, :poster,:sinopse,:nota)";
$stmt = $this->conexao->prepare($sql);
$stmt->bindValue(':titulo',$serie->titulo, PDO::PARAM_STR);
$stmt->bindValue(':sinopse',$serie->sinopse, PDO::PARAM_STR);
$stmt->bindValue(':nota',$serie->nota, PDO::PARAM_STR);
$stmt->bindValue(':poster',$serie->poster, PDO:: PARAM_STR);
return $stmt->execute();       

    }
}