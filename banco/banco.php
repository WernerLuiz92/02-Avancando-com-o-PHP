<?php

    include 'funcoes.php';

    $contasCorrentes = [
        '088.013.760-65' => [
            'titular' => 'Vinicius',
            'saldo' => 6000
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

    titulatToUpperCase($contasCorrentes['088.013.760-65']);

    $contasCorrentes['088.013.760-65'] = saque($contasCorrentes['088.013.760-65'], 1300);

    $contasCorrentes['821.971.400-00'] = deposito($contasCorrentes['821.971.400-00'], 3);

    unset($contasCorrentes['088.013.760-65']);

    exibeContas($contasCorrentes);