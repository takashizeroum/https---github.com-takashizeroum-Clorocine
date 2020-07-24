<?php

require_once ('controler/controler.php');


if(isset($_POST['tituloForm'])){
    $cont = controler::save($_POST,$_FILES);
    
 }

if (isset($_GET['id'])){
    
    controler::favoritar($_GET);
    
}

if ($_SERVER['REQUEST_URI']=='/'||$_SERVER['REQUEST_URI']=='/Index.php') {
    require 'view/galeria.php';
    
    }
    


?>
