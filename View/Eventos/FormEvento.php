<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Cadastro de evento</title>

        <link rel="stylesheet" href="../../css/indexmenu444.css"/>
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
        <br><br><br><br>
        <div class="formulario">
                <fieldset>
                    <legend>Cadastro de Evento</legend>
                    <form method="post" action="cadastrarEvento.php">
                        <table
                            width="100%"
                border="1" 
                bordercolor="white"
                cellspacing="2" 	
                cellpadding="5">
                            <ul>
                                <label id="lbnome">Nome do evento:</label>
                                <input type="text" id="iptnome" name="nome"/>
                            </ul>

                            <ul>
                                <label id="lbnome">Localização do evento:</label>
                                <input type="text" id="iptnome" name="localizacao"/>
                            </ul>

                            <ul>
                                <label id="lbnome">Data do evento:</label>
                                <input type="date" id="iptnome" name="data_evento"/>
                            </ul>

                            <ul>
                                <input type="submit" id="Cadastrar">
                                <a href="../indexmenu.html"> <input type="button" id="Cancelar" class="botoes" value="Cancelar"/></a>
                            </ul>               

                        </table>
                    </form>
                </fieldset>
        </div>
    </body>
</html>

