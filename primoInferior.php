<?php

function primoInferior(int $num)
{
    if ($num < 0) {
        echo 0;
    } else {
        $todoNumeros = [];
        for ($n = 1; $n <= $num; $n++) {
            $primo = 0;
            for ($x = $n; $x >= 1; $x--) {
                if (($n % $x) == 0) {
                    $primo++;
                }
            }
            if ($primo == 2) {
                array_push($todoNumeros, $n);
            }
        }
        echo max($todoNumeros);             
    }
}

// primoInferior();
