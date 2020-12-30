<div class="titulo">Escrever arquivo</div>

<?php
error_reporting(E_ERROR);
// w: modo de escrita
$arquivo = fopen('teste.txt', 'w');
// fopen: criar um arquivo, como nome que vc criou, no parametro deixejado, no nosso caso modo de escrita(w)
fwrite($arquivo, "Valor inicial \n");
// \n: quebra linha em html
// fwrite: inserer texto no arquivo criado 
$str = "Segunda linha \n";
fwrite($arquivo ,$str); // insere nova linha no texto
fclose($arquivo); // fecha o arquivo criado
// obs: quando o arquivo e fechado e dps averto novamente e adicinando algo, esse valor ira tomar lugar de tudo oq estava antes!

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo ");
fclose($arquivo); // fecha o arquivo

$arquivo = fopen('teste.txt', 'a');
// a = ele adicinar no texto e não substituir
fwrite($arquivo, " com novos valores \n");
fwrite($arquivo, "Adicionados em um segundo momento \n");
fclose($arquivo); // fecha o arquivo

ini_set('dispaly_erros', 1); // mostra os erros
$arquivo = fopen('teste.txt', 'x');
// x: faz que um arquivo totalmente novo seja criado, mas ser o nome ja inxestir,aparece mensagem de erro