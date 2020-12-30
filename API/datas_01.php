<div class="titulo">Datas #01</div>

<?php
echo time() .'<br>'; // time(): retorna a quantidade de segundos des do marco 0, o meridiano de Greniweich
echo date('D,d \d\e M \d\e Y H:i A') . '<br>';
// D = dia da semana
// d = dia do mês
// M = mês em forma de nome
// m = valor numerico referente ao mes
// Y = ano com 4 digito
// y = ano com 2 digito
// \d\e = quando quer coloca palavar ai vc colocar entre barras
// H = horas no meridiano de Greniwich
// i = minutos
// A = volta PM, no formato 24 horas

echo strftime('%A %d de %B de %Y', time()) . '<br>'; // outra maneira de chamar data
// setlocale(LC_TIME, 'pt_BR): primeiro parte diz que vc quer trabalhar com localização, dps explicificar que e para tempo, e por fim mudar os dados para nossa linguagem, pode definir fonte entre outros conceitos
setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese'); // confira para portugues de modo geral
echo utf8_encode(ucwords(strftime('%A %d de %B de %Y', time()))) . '<br>'; // outra maneira de chamar data
// utf8_encode(ucwords(: corrige problema com acentuação da palavras em portugues como visto acima

$amanha = time() + (24 * 60 *60); // da exatamente 1 dia essa conta
echo strftime('%A,%d de %B de %Y', $amanha). '<br>';

$proximaSemana = strtotime('+1 week');
// strtotime('+1 week'): usada para pula grande perídos de tempos, nesse caso 1 semana
echo utf8_encode(ucwords(strftime('%A,%d de %B de %Y', $proximaSemana))). '<br>';

$dataFixa = mktime(15, 30, 50,1, 25,1975);
// sequencia funçãoa cima: hora, minuto,secundos,mes, dia, ano, e ver ser ta ou n horario de verão
// mktime: para guardar uma data fixa!
echo utf8_encode(ucwords(strftime('%A,%d de %B de %Y - %H:%M:%S', $dataFixa))). '<br>';