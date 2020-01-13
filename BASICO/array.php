<?php

$meuarray = array('arroz','feijão','açucar');
var_dump($meuarray);

echo '<br>';
echo '<br>';

echo $meuarray[1];

echo '<br>';
echo '<br>';

foreach ($meuarray as $produto) {
    echo $produto;
    echo "<br>";
}