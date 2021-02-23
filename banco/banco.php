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
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {
            ['titular' => $titular, 'saldo' => $saldo] = $conta; ?>
            <dt><h3>Titular: <?= $titular; ?></h3></dt>
            <dd>CPF: <?= $cpf; ?></dd>
            <dd>Saldo: R$ <?= $saldo; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>