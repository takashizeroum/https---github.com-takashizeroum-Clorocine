<?php



require_once ('./model/Filme.php');
require_once ('./repository/filmesRepo.php');



class controler {




  public static function index () {
    
    $repofilmes = new filmesRepo();
    return $repofilmes->listarTodos();
    

  }

  
  public static function save ($request,$file) {
    $filme = new Filme();
    $repofilme = new filmesRepo();
    $filme->titulo = $request["tituloForm"];
    $filme->tipo = $request["tipoForm"];
    $filme->descricao = $request["descricaoForm"];
    $filme->nota = $request["notaForm"];
    
    $posterDir = "./img/capas";
    $posterPath = $posterDir . basename($file["capaForm"]["name"]);
    $posterTemp =$file["capaForm"]["tmp_name"];
    move_uploaded_file($posterTemp,$posterPath);

      if (gettype($posterPath)=="string"){
      $filme->capa = $posterPath;
      }
    

    
    $repofilme->inserir($filme);
    
    
  }
public static function favoritar ($id){
$favrepo = new filmesRepo();
$id= $id;
$favrepo->favorita($id);

}








}


  ?>