<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar eventos</title>
        <link type="text/css" rel="stylesheet" href="../../css/indexmenu444.css">
    
    </head>
    <style>body {
            color: white;
  background-image: url(../..//css/imagens/car.jpg);
  background-attachment: fixed;
  background-size: 100% 100%;
}</style>
     <body>
          <nav class="menu">

            <ul>

                <li><a href="../indexmenu.html">Home</a></li>



                <li><a href="#">Eventos</a>

                    <ul>

                        <li><a href="FormEvento.php">Cadastrar</a></li>

                        <li><a href="ConsultarEvento.php">Consultar</a>

                    </ul>

                </li>

                <li><a href="#">Cidades</a>
                
                <ul>

                    <li><a href="../Cidades/FormCidade.php">Cadastrar</a></li>

                    <li><a href="../Cidades/Consultarcidade.php">Consultar</a>

                    </ul>

                </li>

                <li><a href="Contato.html">Contato</a></li>

            </ul>

        </nav>
            <br><br><br><br><br>
         <div class="Consultar">
             <fieldset>
                <h1>Consultar Cidades Cadastrados</h1>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="white"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr>
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome</strong></td>		
                        <td align="center"> <strong>Localização</strong></td>
                        <td align="center"> <strong>Data do evento</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_eventos");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_eventos"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["localizacao"]?></td>
                                <td align="center"><?=$campo["data_evento"]?></td>
                                <td align="center"><a href="FormEditarevento.php?editarid=<?php echo $campo ['id_eventos'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirEvento.php?p=excluir&eventos=<?php echo $campo['id_eventos'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                <a href="../indexmenu.html"><input type="button" class="botoes" value="Cancelar" color="red"/></a>
             </fieldset>
         </div>
    </body>
</html>
