<?php

    function exibeMensagem($msg) 
    {
        echo $msg . PHP_EOL;
    }

    function saque(array $conta, float $valor): array 
    {
        if ($conta['saldo'] < $valor) {
            exibeMensagem("Saldo insuficiente");
        } else {
            $conta['saldo'] -= $valor;
        }

        return $conta;
    }

    function deposito(array $conta, float $valor): array 
    {
        if ($valor < 0) {
            exibeMensagem("Valor do depósito não pode ser negativo.");
        } else {
            $conta['saldo'] += $valor;
        }

        return $conta;
    }

    function exibeContas($contasCorrentes) 
    {
        exibeMensagem("Lista de Contas");
        foreach ($contasCorrentes as $cpf => $conta) {
            exibeMensagem("Olá {$conta['titular']}! Seu saldo atual é de: R$ {$conta['saldo']}");
        }
        exibeMensagem('');
    }

    function titulatToUpperCase(array &$conta)
    {
        $conta['titular'] = mb_strtoupper($conta['titular']);
    }