<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); // IGUAL
var_dump(1 > 1); // MAIOR
var_dump(1 >= 1); // MAIOR IGUAL
var_dump(4 < 23); // MENOR
var_dump(1 <= 7); // MENOR IGUAL
var_dump(1 != 1); // DIFERENTE
var_dump(1 <> 1); // DIFERENTE
var_dump(111 === "111"); // === comparar variavel e a classe
var_dump(111 != "111"); // DIFERENTE
var_dump(111 !== "111"); // SER SÃO DIFENTE NA CLASSE E VALOR

echo "<p>Relacionais no If/Else </p><hr>"; // <hr> traça uma linha

$idade = 75;

if($idade < 18){
    echo "Menor de idade = $idade anos <br>";
}else if ($idade <= 65){
    echo "Adulto = $idade anos <br>";
}else {
    echo "Terceira idade = $idade anos! <br>";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3); // retorna 1 ser o da esquerda for maior
var_dump(500 <=> 500); // retorna 0 ser forem iguais
var_dump(5 <=> 50); // retorna -1 ser o da direita for maior

ECHO '<P>Valores podem ser V ou F</P><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>

<style>
    p {
        margin-bottom: 0px;
    }
    hr{
        margin-top: 0px;
    }
</style>