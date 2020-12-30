<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens(){
    // function: palavara para criar uma função
    echo"Olá! ";
    echo"Até a próxima!<br>";
}

imprimirMensagens(); // chamada da função
imprimirMensagens(); // chamada da função
imprimirMensagens(); // chamada da função

$variavel = 1;

function trocaValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
 }

 echo "Antes: $variavel <br>";
 trocaValor();
 echo "Antes: $variavel <br>";
 
 function trocaValorDeVerdade(){
     // global: palavra propria que pegar a variavel de fora do escopo e muda o valor original dela, quando sair da função o valor será o que foi usado na função
     global $variavel;
     $variavel = 3;
     echo "Durante a função: $variavel <br>";
    }
    echo "Antes: $variavel <br>";
    trocaValorDeVerdade();
    echo "Antes: $variavel <br>";

 var_dump(trocaValorDeVerdade());