<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Cidades</title>
        <link type="text/css" rel="stylesheet" href="../../css/indexmenu444.css">
    
    </head>
    <style>body {
         color: white;
  background-image: url(../..//css/imagens/car.jpg);
  background-attachment: fixed;
  background-size: 100% 100%;
}</style>
     <body>
         <div>
             <div>
             <nav class="menu">

            <ul>

                <li><a href="../indexmenu.html">Home</a></li>



                <li><a href="#">Eventos</a>

                    <ul>

                        <li><a href="../Eventos/FormEvento.php">Cadastrar</a></li>

                        <li><a href="../Eventos/ConsultarEvento.php">Consultar</a>

                    </ul>

                </li>

                <li><a href="#">Cidades</a>
                
                <ul>

                    <li><a href="FormCidade.php">Cadastrar</a></li>

                    <li><a href="Consultarcidade.php">Consultar</a>

                    </ul>

                </li>

                <li><a href="Contato.html">Contato</a></li>

            </ul>

        </nav>
                 <br><br><br>
                 </div>
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
                        <td align="center"> <strong>Estado</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_cidades");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_cidade"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["estado"]?></td>
                                <td align="center"><a href="FormCidade.php?editarid=<?php echo $campo ['id_cidade'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirCidade.php?p=excluir&cidade=<?php echo $campo['id_cidade'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                <a href="../indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
         </div>>
    </body>
</html>
