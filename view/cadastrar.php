<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro clorocine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href= "../main.css">
    </head>
    <body>
<?php include 'header.php'; ?>

            <div class="centralizador">


            <form class="formulario" action="../Index.php" method="POST" enctype="multipart/form-data">
                <h1>Cadastrar Filme</h1>
                <label for="tituloForm">Titulo do Filme</label>
                <input class="campo" type="text" placeholder="Titulo do Filme" id="tituloForm" name="tituloForm" required/>
                <label for="tipo">Tipo do Filme</label>
                <select name = "tipoForm" id="tipoForm">
                <option value="cbx1">Animação</option>
                <option value="cbx2">Besteirol</option>
                <option value="cbx3">Cómedia</option>
                <option value="cbx4">Cómedia Romântica</option>
                <option value="cbx5">Cativeiro</option>
                <option value="cbx6">Drama</option> 
                <option value="cbx7">Guerra</option>
                <option value="cbx8">Familia</option>
                <option value="cbx9">Ficção</option>
                <option value="cbx10">Final Revelador</option>
                <option value="cbx11">Isolamento</option>
                <option value="cbx12">Terror Sobrenatural</option>
                <option value="cbx13">Terror Psicologico</option>
                <option value="cbx14">Drama</option>
                <option value="cbx15">Pra Segurar o Fôlego</option>                
                </select>
                <label for="descricaoForm"></label>
                <textarea class="campo" id="descricaoForm" name="descricaoForm" placeholder="Descrição ou Sinopse" maxlength="300"></textarea>
                <label for="nota">Nota do Filme</label>
                <input type="number" class="campo" id="nota" max="10" min="0" name="notaForm" placeholder="Nota" required/>
                
<div class="linhador"><label id ="lblFile" for="capa"><div class="btnFile"><h6>Escolha uma Capa</h6></div></label>
                <input class="campo" type="file" name="capaForm" id="capa"/>
</div>

                <div class="linhador">
                
                <a class="botao" href="teste.php">Cancelar</a>
                <button type="submit"  class="botao">Cadastrar</button>
                </div>
            </form>
            </div>
            
        
    </body>
</html>
