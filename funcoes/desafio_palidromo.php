<div class="titulo">Desafio Palíndromo</div>

<?php

 // PALÍNDROMO COM FOR E IF ELSE 
function palíndromo($palavra){
    $ultimoIndice = mb_strlen($palavra)-1;
    for ($I = 0; $I <= $ultimoIndice; $I++){
        if ($palavra[$I] !== $palavra[$ultimoIndice - $I]){
           return 'Não é um palíndromo.';
        }
    }
         return 'Sim, é um palíndromo.';
}

echo palíndromo('arara') . '<br>';
echo palíndromo('ana') . '<br>';
echo palíndromo('abccba') . '<br>';
echo palíndromo('bola') . '<br>';

echo '<hr>';
// PALÍNDROMO COM FUNÇÃO DE REVERSÃO DO PHP

function palíndromoSimples($palavra){
    return $palavra === strrev($palavra)? 'Sim,é um palíndromo.': 'Não é um palíndromo.';
    // strrev : inverte a palavra
}

echo palíndromoSimples('arara') . '<br>';
echo palíndromoSimples('ana') . '<br>';
echo palíndromoSimples('abccba') . '<br>';
echo palíndromoSimples('bola') . '<br>';
