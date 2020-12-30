<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];
$notasArredondadas = [];

foreach ($notas as $nota){
    $notasArredondadas[] = round($nota);
    // round: arredonda
}
print_r($notasArredondadas);

echo '<br>';
$notasArredondadas2 = array_map('round', $notas);
// mp map: primeiro vem a função dps o array
print_r($notasArredondadas2);

// exemplo de Fliter(filtrar) abaixo

$aprovados = [];
foreach ($notas as $nota){
     if($nota >= 7){
         $aprovados[] = $nota;

     }
}
echo '<br>';
print_r($aprovados);

function aprovadosFunction($nota){
    return $nota >= 7;
}

echo '<br>';

$aprovados1 =array_filter($notas, "aprovadosFunction"); 
// no fliter: o array vem primeiro dps o paramentro ou a função
print_r($aprovados1);

function SerNãoPassarComEssaAjuda($nota){
    $notaResultante = round($nota) + 1;
    return $notaResultante > 10 ? 10: $notaResultante;
}

echo '<br>';
$aprovados2 = array_map("SerNãoPassarComEssaAjuda", $notas); 
// quando usei fliter na linha acima, não funcinou, melhor usar so o map
print_r($aprovados2);
