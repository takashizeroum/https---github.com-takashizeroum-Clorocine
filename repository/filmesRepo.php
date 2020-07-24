<?php

require_once ('Conexao.php');

class filmesRepo {
    
    
    public static function inserir (Filme $filme){ 
        $db = Conexao::criar();
        $sql = "INSERT INTO filmes ( titulo, tipo, descricao, nota, capa) VALUES(:titulo,:tipo,:descricao,:nota,:capa)";

        $stmt = $db->prepare($sql); 
        $stmt -> bindValue(':titulo', $filme->titulo, PDO::PARAM_STR );
        $stmt -> bindValue(':tipo', $filme->tipo, PDO::PARAM_STR );
        $stmt -> bindValue(':descricao', $filme->descricao, PDO::PARAM_STR );
        $stmt -> bindValue(':nota', $filme->nota, PDO::PARAM_STR );
        $stmt -> bindValue(':capa', $filme->capa, PDO::PARAM_STR );
        if($stmt->execute()){
            
	    }else{
            echo"Erro inserção";
        }
        
    }

    public function listarTodos ():array {

        $db = Conexao::criar();	

        $sql = "SELECT * FROM filmes";
        
        $filmesLista = array();
        
        $filmes = $db->query($sql);
        
        while ($filme = $filmes->fetch() ){
        
        array_push($filmesLista,$filme);
        }
        return $filmesLista;

        }

        public function favorita ($id){
        $db = Conexao::criar();
        $sql = "UPDATE filmes SET favorito = NOT favorito WHERE id = :id";

        $stmt = $db->prepare($sql); 
        $stmt -> bindValue(':id', $id["id"], PDO::PARAM_INT);
       
       $stmt->execute();
            

        }
	
	

    





}
?>