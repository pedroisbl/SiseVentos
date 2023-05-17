<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cidade</title>
        <link rel="stylesheet" href="../../css/indexmenu444.css"/>
    </head>
    <style>body {
            color: white;
            background-image: url(../..//css/imagens/car.jpg);
            background-attachment: fixed;
            background-size: 100% 100%;
        }</style>
    <body>
        <div class="formulario">
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
            <table
                width="100%"
                border="1" 
                bordercolor="white"
                cellspacing="2" 	
                cellpadding="5"
                >
                <h2>Cadastro Cidade</h2>
                <form method="post" action="cadastrarcidade.php">

                    <table>
                        <ul>
                            <label id="lbnome">Nome da Cidade:</label>
                            <input type="text" id="iptnome" name="nome"/>
                        </ul>

                        <ul> 
                            <label id="lbestcivil">Estado:</label>
                            <select id="iptestado" name="estado"/>
                            <option value="AC">Acre</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal*</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SP">São Paulo</option>
                            <option value="RO">Rondônia</option>
                            </select>
                        </ul>

                        <ul>
                            <input type="submit" id="Cadastrar">
                            <a href="../indexmenu.html"> <input type="button" id="Cancelar" class="botoes" value="Cancelar"/></a>
                        </ul>               

                    </table>
                </form>
            </table>
        </div>

    </body>
</html>

