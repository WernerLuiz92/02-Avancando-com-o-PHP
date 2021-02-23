<?php

    $array = [
        1 => 'a',
        'string' => 'b'
    ];

    //O PHP aceita como chave de uma string valores dos tipos INT e STRING, porém os demais tipos pode ser usados lembrando que serão convertidos.

    // Ver Documentação: https://www.php.net/manual/pt_BR/language.types.array.php

    foreach ($array as $chave => $valor) {
        echo "$valor [$chave]".PHP_EOL;
    }