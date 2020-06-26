<?php
require "conexao.php";
class SeriesRepositoryPDO{

    private $conexao;
    public function construct(){
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
$stmt->bindValue(':titulo',$serie->titulo, SQLITE3_TEXT);
$stmt->bindValue(':sinopse',$serie->sinopse, SQLITE3_TEXT);
$stmt->bindValue(':nota',$serie->nota, SQLITE3_FLOAT);
$stmt->bindValue(':poster',$serie->poster, SQLITE3_TEXT);
return $stmt->execute();       

    }
}