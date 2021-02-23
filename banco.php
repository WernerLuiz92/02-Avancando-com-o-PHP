<?php

    function exibeMensagem($msg) {
        echo $msg . PHP_EOL;
    }

    //Função - Tem retorno
    function saque($conta, $valor){
        if ($conta['saldo'] < $valor) {
            exibeMensagem("Saldo insuficiente");
        } else {
            $conta['saldo'] -= $valor;
        }

        return $conta;
    }

    function deposito($conta, $valor){
        if ($valor < 0) {
            exibeMensagem("Valor do depósito não pode ser negativo.");
        } else {
            $conta['saldo'] += $valor;
        }

        return $conta;
    }

    //Subrotina - Sen retorno
    function exibeContas($contasCorrentes) {
        exibeMensagem("Lista de Contas");
        foreach ($contasCorrentes as $cpf => $conta) {
            exibeMensagem('Olá '.$conta['titular'].'! Seu saldo atual é de: R$ '.$conta['saldo']);
        }
        exibeMensagem('');
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

    $contasCorrentes['821.971.400-00'] = deposito($contasCorrentes['821.971.400-00'], 3);

    exibeContas($contasCorrentes);


