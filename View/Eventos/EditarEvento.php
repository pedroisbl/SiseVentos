<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$reclocalizacao= filter_input(INPUT_POST, 'localizacao');

$recdata_evento= filter_input(INPUT_POST, 'data_evento');



  if(mysqli_query($conn, "UPDATE tb_eventos SET nome='$recnome', localizacao='$recdata_evento', data_evento='$recdata_evento' WHERE id_eventos=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarEvento.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>