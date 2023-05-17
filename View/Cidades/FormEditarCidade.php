<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="UTF-8">

    <title>Editar Cidade</title>

    <link rel="stylesheet" href="../../css/indexmenu444.css"/>



  </head>
    <style>body {
            color: white;
            background-image: url(../..//css/imagens/car.jpg);
            background-attachment: fixed;
            background-size: 100% 100%;
        }</style>
  <body>

    <?php

      include("conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_cidades WHERE id_cidade=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

             
      <br><br><br><br>
    <div class="formulario">

      <form method="post" action="Editarcidade.php">

        <h1>Alterar Cidade</h1>
      
<!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_cidade"]?>"> 

        <label>Nome</label><br> 
        <input type="text" name="nome" placeholder="Nome" value="<?=$campo["nome"]?>"> <br><br>

        <label>Estado</label><br>
        <input type="text" name="estado" placeholder="Estado" value="<?=$campo["estado"]?>"> <br><br>

        <input type="submit" class="botoes" value="Salvar" >
        <a href="Consultarcidade.php"><input type="button" class="botoes" value="Cancelar"/></a>

      </form>

    </div>

     

  </body>

</html>
