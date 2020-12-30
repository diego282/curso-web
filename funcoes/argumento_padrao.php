<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    return "Bem vindo, $nome $sobrenome! <br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null,NULL);
echo saudacao('Mestre','Supremo');


function anotarPerdido ($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
// ser dor usar valor padrao, sempre deixar ele por ultimo para não ocorrer o erro
anotarPerdido('Hamburguer');
anotarPerdido('Pizza','Refrigerante');

function anotarPerdido2 ($bebida = 'Água',$comida ){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotarPerdido('Hamburguer'); ser eu descomentar essa linha, o programa da erro, pq o valor padrao foi passado primiero
anotarPerdido('Pizza2','Refrigerante2');