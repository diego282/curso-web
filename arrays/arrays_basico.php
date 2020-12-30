<div class="titulo">Arrays Básico</div>

<?php

$lista = array(1,2,3.4,"texto");
echo $lista . '<br>'; // so volta nome array e não o conteúdo
var_dump($lista); // volta os valores e suas classes/ obs: não gosto desse jeito
echo '<br>';
print_r($lista); // meu tipo de impressão para array

echo '<br>' . $lista[0]; // [] mas posiçao retorna o valor daquela posição
echo '<br>' . $lista[1]; // [] mas posiçao retorna o valor daquela posição
echo '<br>' . $lista[2]; // [] mas posiçao retorna o valor daquela posição
echo '<br>' . $lista[3]; // [] mas posiçao retorna o valor daquela posição

$texto = "Esse é um texto de teste";
echo '<br>' . $texto[0]; // não indicado pois ser a fazer tiver uma acentuação, quando passar dele o valor retornado sera errado.
echo '<br>' . $texto[2];// não indicado pois ser a fazer tiver uma acentuação, quando passar dele o valor retornado sera errado.
echo '<br>' . $texto[11];// não indicado pois ser a fazer tiver uma acentuação, quando passar dele o valor retornado sera errado.
echo '<br>' . mb_substr($texto, 10, 1); // esse o sinal não atrapalha usando mb_substr

$lista [0] =1234; // pode ser mudar o valor da posição atraves de [posição];
echo '<br>' . $lista[0];