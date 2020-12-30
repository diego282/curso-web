<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a,$B){
    return $a + $B;
}

echo soma (14,15) . '<br>';
echo soma (6,5,4) . '<br>'; // como so tem 2 parametro so soma os 2 primeiros e o restante e ignorado

function somaCompleta (...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}


echo somaCompleta(1,2,3,4,5);

$array = [6,7,8];
echo '<br>' . somaCompleta(...$array);
// ... : conhecido como spread operator. Isso quer dizer que a funcão/método receberá uma quantidade variável de argumentos e o tratará como um array.
function membros ($titular, ... $dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes){
        foreach ($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros ("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto", "Junior");