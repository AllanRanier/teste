<?php

function seculoAno($ano)
{
    $ultimoNumero = substr($ano, 2);
    $primeiroNumero = substr($ano, 0, -2);

    if ($ultimoNumero == '00') {
        echo 'Ano = ' . $ano . ' = Século ' . $primeiroNumero;
    } else {
        $seculo = $primeiroNumero + 1;
        echo 'Ano = ' . $ano . ' = Século ' . $seculo;
    }
}

// seculoAno();

