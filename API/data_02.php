<div class="titulo">Datas #02</div>

<?php

$formatoData1 = 'D,d \d\e M \d\e Y';
$formatoData2 = '%A %d de %B de %Y ';
$formatoDataHora = '%A %d de %B de %Y - %H:%M:%S ';

$agora = new DateTime();
// DateTime(): permite trabalhar com data e hora como se fossem objetos que podem ser facilmente manipulados através de diversos métodos, facilitando a criação de regras de negócio com base em datas, além da conversão e a manipulação de diferentes formatos.
//print_r($agora);
//echo '<br>';

echo $agora->format($formatoData1) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese');
echo utf8_encode(ucwords(strftime($formatoData2, $agora->getTimestamp()))) . '<br>';
// getTimestamp: estilo orientando ao objeto

$amanha = new DateTime('+2 week');
echo utf8_encode(ucwords(strftime($formatoData2, $amanha->getTimestamp()))) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo utf8_encode(ucwords(strftime($formatoData2, $dataFixa->getTimestamp()))) . '<br>';

$amanha->modify('+1 day');
// modify: modifica a variavel
echo utf8_encode(ucwords(strftime($formatoDataHora, $amanha->getTimestamp()))) . '<br>';

$amanha->setdate(2000, 5, 20); // ano, mes, dia
//setDate: coloca uma data especifica!
echo utf8_encode(ucwords(strftime($formatoDataHora, $amanha->getTimestamp()))) . '<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
// como o getTimesTamp faz vira um obejeto a data pode ser comparada como abaixo
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo $outraData == $dataFutura ? 'Igual' : 'Diferente';

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
//  new DateTimeZone: expressão para mudar o fuso horario, 
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');