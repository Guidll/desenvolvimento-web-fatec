<?php
    //Faça um programa que leia um número e, caso ele seja positivo, calcule e mostre:• O número digitado ao quadrado • A raiz quadrada do número digitado.
    $num = 2;
    $raiz = sqrt($num); 
    $potencia = pow(2, $num);

    if ($num < 0) {
        echo $num . " é um número negativo";
    } else {
        echo "A raiz de ". $num . " é " . $raiz;
        echo "<br>";
        echo "A potência do ". $num . " é " . $potencia;
    }
?>