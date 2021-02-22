<?php

//Arrays associativas
    $conta1 = [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ];
    $conta2 = [
        'titular' => 'Werner',
        'saldo' => 1250
    ];
    $conta3 = [
        'titular' => 'Tiago',
        'saldo' => 5675.20
    ];


    $contasCorrentes = [$conta1, $conta2, $conta3];

    foreach ($contasCorrentes as $conta) {
        echo 'Titular: '.$conta['titular'].PHP_EOL;
        echo 'Saldo: R$ '.$conta['saldo'].PHP_EOL;
        echo PHP_EOL;
    }