<?php

    include 'funcoes.php';

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

    exibeContas($contasCorrentes);

    $contasCorrentes['088.013.760-65'] = saque($contasCorrentes['088.013.760-65'], 1300);

    exibeContas($contasCorrentes);

    $contasCorrentes['821.971.400-00'] = deposito($contasCorrentes['821.971.400-00'], 3);

    exibeContas($contasCorrentes);