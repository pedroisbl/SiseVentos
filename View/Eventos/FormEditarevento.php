<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="UTF-8">

    <title>Editar Eventos</title>

    <link rel="stylesheet" href="css/estiloforms.css"/>



  </head>

  <body>

    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_eventos WHERE id_eventos=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

    <div class="formulario">

      <form method="post" action="EditarEvento.php">

        <h1>Alterar Evento</h1>
      
<!esta linha cria um campo oculto para passar o id_evento, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_eventos"]?>"> 

        <label>Nome</label><br> 
        <input type="text" name="nome" placeholder="Nome" value="<?=$campo["nome"]?>"> <br><br>

        <label>Localização</label><br>
        <input type="text" name="estado" placeholder="Localização" value="<?=$campo["localizacao"]?>"> <br><br>

        <label>Data do evento</label><br> 
        <input type="date" name="data_evento" placeholder="data do evento" value="<?=$campo["data_evento"]?>"> <br><br>
        
        <input type="submit" class="botoes" value="Salvar" >
        <a href="ConsultarEvento.php"><input type="button" class="botoes" value="Cancelar"/></a>

      </form>

    </div>

     

  </body>

</html>
