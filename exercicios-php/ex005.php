<?php
    //Faça um programa que leia uma temperatura em graus Fahrenheit e apresente-a convertida em graus Celsius. A formula de conversão é: C = 5.0 ∗ (F − 32.0)/9.0, sendo C a temperatura em Celsius e F a temperatura em Fahrenheit.
    $fahrenheit = 20;
    $calc = 5.0 * ( $fahrenheit - 32.0 ) / 9.0;
    echo $fahrenheit. " Fahrenheit equivalem a " . number_format($calc, 2). " Celsius";
?>