<div class="titulo">Operador Ternário</div>

<?php
$idade =70;
$status;

if ($idade >= 18){
    $status = "Maior de idade";
}else {
    $status = "Menor de idade";
}
// operador ternário consegue substituir o if, e possui ter operando, os dados ser for verdadeiro ou falso e a expressão em si!
// os sinais que separa as variaiveis e primeiro ? e dps :
echo "<br> $status";

$idade =17;
$status = $idade >= 18? 'Maior de idade' : 'Menor de idade';
echo "<br> $status";
// pode ser sua operador ternário 1 dentro do outro
$status = $idade >= 18? $idade >= 65? 'Aposentado' : 'Maior de idade' : 'Menor de idade';
echo "<br> $status";

