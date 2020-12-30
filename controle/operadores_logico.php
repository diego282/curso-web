<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class= 'divisao'>V ou F </p><hr>";
var_dump(true); echo '<br>';
var_dump(!true); echo '<br>';

echo "<p class= 'divisao'>Tabela verdade do 'AND' (E) </p><hr>";

var_dump(true && true); echo '<br>';
var_dump(true && false); echo '<br>';
var_dump(fALSE && TRUE); echo '<br>';
var_dump(false && false); echo '<br>';

var_dump(true and true); echo '<br>';
var_dump(true and false); echo '<br>';
var_dump(fALSE and TRUE); echo '<br>';
var_dump(false and false); echo '<br>';

echo "<p class= 'divisao'>Tabela verdade do 'OR' (OU) </p><hr>";

var_dump(true ||true);  echo '<br>';
var_dump(true ||false); echo '<br>';
var_dump(fALSE ||TRUE); echo '<br>';
var_dump(false ||false); echo '<br>';

var_dump(true OR true);  echo '<br>';
var_dump(true OR false); echo '<br>';
var_dump(fALSE OR TRUE); echo '<br>';
var_dump(false OR false);echo '<br>';

echo "<p class= 'divisao'>Tabela verdade do 'XOR' (OU Exclusivo) </p><hr>";

var_dump(true != true);  echo '<br>';
var_dump(true != false); echo '<br>';
var_dump(fALSE != TRUE); echo '<br>';
var_dump(false != false);echo '<br>';

var_dump(true xor true);  echo '<br>';
var_dump(true xor false); echo '<br>';
var_dump(fALSE xor TRUE); echo '<br>';
var_dump(false xor false); echo '<br>';

echo "<p class= 'divisao'>Negação Lógica</p><hr>";
echo "<p class= 'divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

if ($idade >= 60 && $sexo == 'F'){
    echo "Pode-se aposentar!-> $sexo";
}else if($idade >= 65 && $sexo = 'M'){
    echo "Pode-se aposentar também! -> $sexo";
}else{
    echo "Vai ter que trabalhar mais um pouco";
}

// </strong> deixa em negrito
?>


