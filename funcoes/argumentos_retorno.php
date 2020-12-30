<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMensagem(){
    return 'Seja bem vindo(a)!';
}

obterMensagem(); // não retorna nda pq está sem o echo, pois usamos so retorn na função
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Diego');
echo '<br>', obterMensagemComNome('Thiago');

function soma($a,$b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(32,5);
echo '<br>', soma(45,78);
echo '<br>', soma($x,$y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel,3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel,5000);
echo '<br>', $variavel;