<?php
    require_once 'PacoteHora.php';

    $pacote1 = new PacoteHora(1, 'Pacote 10hs', [1, 2, 3], 10, 2);
    $pacote2 = new PacoteHora(2, 'Pacote 100hs', [1], 100, 0);
    $pacote3 = new PacoteHora(3, 'Pacote 5hs', [4, 5], 5, 4);
    $pacotes = [$pacote1, $pacote2, $pacote3];

    $id = $_POST["id"];
    $hr = $_POST["hr"];

    print_r(getPacotesValidos($pacotes, $id, $hr));
    
?>