<?php
    require_once '../src/PacoteHora.php';

    $Pacote_Test_01 = new PacoteHora(1, 'Pacote Odin', [1, 2, 3, 4, 5], 100, 0);
    $Pacote_Test_02 = new PacoteHora(2, 'Pacote Thor', [1, 2, 3], 100, 50);
    $Pacote_Test_03 = new PacoteHora(3, 'Pacote Loki', [6], 30, 30);
    $Pacotes_Test = [$Pacote_Test_01, $Pacote_Test_02, $Pacote_Test_03];

    $cena_01 = getPacotesValidos($Pacotes_Test, 5, 10); //Esperamos apenas o Pacote Odin
    $cena_02 = getPacotesValidos($Pacotes_Test, 6, 5); //Esperamos um array vazio
    $cena_03 = getPacotesValidos($Pacotes_Test, 2, 25); //Esperamos os Pacotes Odin e Thor

    foreach ($cena_01 as $c1){
        if ($c1 == $Pacote_Test_01){
            print_r($c1);
            print_r('<br>');
        } else{
            print_r('Falha!');
            print_r('<br>');
        }
    }

    if (empty($cena_02)){
        print_r($cena_02);
        print_r('<br>');
    }else {
        print_r('Falha!');
        print_r('<br>');
    }

    foreach ($cena_03 as $c3){
        if ($c3 === $Pacote_Test_01){
            print_r($c3);
            print_r('<br>');
        } elseif ($c3 === $Pacote_Test_02){
            print_r($c3);
            print_r('<br>');
        }        
        else{
            print_r('Falha!');
            print_r('<br>');
        }   
    }
?>