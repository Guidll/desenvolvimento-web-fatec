<?php
    // Faça um programa que receba leia um inteiro entre 1 e 7 e imprima o dia da semana correspondente a este número. Isto e, domingo se 1, segunda-feira se 2, e assim por diante.
    $userInput = 6;
    $dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

    switch ($userInput) {
        case 1:
            echo $dias[0];
            break;
        case 2:
            echo $dias[1];
            break;
        case 3:
            echo $dias[2];
            break;
        case 4:
            echo $dias[3];
            break;
        case 5:
            echo $dias[4];
            break;
        case 6:
            echo $dias[5];
            break; 
        case 7:
            echo $dias[6];
            break;  
        default:
            echo "Valor inválido";
            break;
    }
?>