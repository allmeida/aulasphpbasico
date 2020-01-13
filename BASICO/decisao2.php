<?php

$peso = 35;

switch($peso) {
    case 10:
        echo "Você está magro";
    break;
    case 50:
        echo "Peso normal";
    break;
    case 100:
        echo "Você esta obeso";
    break;
    default:
        echo "Valor não pode ser processado";
    break;
}