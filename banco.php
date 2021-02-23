<?php

    function exibeMensagem($msg) {
        echo $msg . PHP_EOL;
    }

    //Função - Tem retorno
    function saque($conta, $valor){
        if ($conta['saldo'] > $valor) {
            $conta['saldo'] -= $valor;
        } else {
            exibeMensagem("Saldo insuficiente");
        }

        return $conta;
    }

    function deposito($conta, $valor){
        $conta['saldo'] += $valor;

        return $conta;
    }

    //Subrotina - Sen retorno
    function exibeContas($contasCorrentes) {
        exibeMensagem("Lista de Contas");
        foreach ($contasCorrentes as $cpf => $conta) {
            exibeMensagem('Olá '.$conta['titular'].'! Seu saldo atual é de: R$ '.$conta['saldo']);
        }
    }

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

    $contasCorrentes['821.971.400-00'] = deposito($contasCorrentes['821.971.400-00'], 300);

    exibeContas($contasCorrentes);


