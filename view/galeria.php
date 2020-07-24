<!DOCTYPE html>

<html>
    <head>
        <title>FilmologIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href= "../main.css">
    </head>
	
    <?php
    require_once ('./controler/controler.php');
    $cont = new controler();
    $filmes = $cont->index();
    
    include 'header.php';    
    
    
    ?>	
    <body>



        <section>
		
		
		
		<!-- Montagem do CARD VIA BD -->
		<?php foreach ($filmes as $filme):
			

			?>
            <div class="card">
                <div class="banerCard">
                    <img class="baner" src="<?php echo $filme["capa"] ?>"/>
                                    
                    <img class="icoh" id="<?php echo $filme["id"] ?>" src="<?php if($filme["favorito"]== 0){ echo"./img/heart.svg";}else{echo"./img/icoh.svg";} ?>"  alt="curtir"/>
                </div>
                <div class="cardDesc">
                    <div class="notacont">
                        <img class="icos" src="./img/star.svg" alt="notas"/>
                        <p class="nota"><?php echo $filme["nota"] ?></p>
                    </div>
                    <div class = "textscont">
                     <h2><?php echo $filme["titulo"] ?></h2>
                     <p class="descricao"><?php echo $filme["descricao"]?></p>
                    </div>            
                </div>
                    
                
            </div>
		<?php endforeach ?>
            
		
			
			
			
			
        </section>
        
        
<script>
document.querySelectorAll(".icoh").forEach(btn =>{
btn.addEventListener("click", (e) =>{
    var id = btn.getAttribute("id");
    
    
        
    if(btn.src == "http://localhost/img/heart.svg"){
btn.src ="./img/icoh.svg";
        flag =1;

    }else {
        
        btn.src = "../img/heart.svg";
    
    }
    fetch("http://localhost/Index.php?id="+id),{method:'GET', mode:'cors', cache:'default'};
});

});


</script>


    </body>
</html>
