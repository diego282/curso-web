<?php
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

//!function_exists: verifica ser existe a função
if(!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}