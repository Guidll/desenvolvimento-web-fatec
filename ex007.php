<?php
    //Faça um programa que leia um número caso seja positivo, calcule a raiz quadrada do número. Caso o número seja negativo, mostre uma mensagem dizendo que o número é invalido.
    $num1 = -1;
    $raiz = sqrt($num1); 

    if ($num1 < 0) {
        echo $num1 . " é um número negativo";
    } else {
        echo "A raiz de ". $num1 . " é " . $raiz;
    }
?>