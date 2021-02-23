<?php

    $contasCorrentes = [
        '088.013.760-65' => [
            'titular' => 'Vinicius',
            'saldo' => 1000
        ], 
        '821.971.400-00' => [
            'titular' => 'Werner',
            'saldo' => 1250
        ], 
        '745.714.030-11' => [
            'titular' => 'Tiago',
            'saldo' => 5675.20
        ]
    ];

    $contasCorrentes['044.769.890-71'] = [
        'titular' => 'Diogo',
        'saldo' => 1260
    ];

    foreach ($contasCorrentes as $cpf => $conta) {
        echo 'CPF: '.$cpf.PHP_EOL;
        echo 'Titular: '.$conta['titular'].PHP_EOL;
        echo 'Saldo: R$ '.$conta['saldo'].PHP_EOL;

        echo PHP_EOL;
    }