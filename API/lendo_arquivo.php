<div class="titulo">Lendo arquivo</div>

<?php

// r: possibilitar ler o arquivo
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
// fread: para ler o arquivo
// o valor e representa a quantidade de byte vc quer ler
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
// filezize: nois informar o tamanho do arquivo
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
// fgets: ler linha por linha
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo)); 
echo '<br>';
fclose($arquivo);

echo '<hr>';

// esse while faz que o arquivo seja todo lido
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    // feof: avalia se já chegou ao final do arquivo, se não, continua no while até que o arquivo seja completamente lido e seus dados impressos no output buffer.
    echo fgets($arquivo);
}
fclose($arquivo);
 
echo '<hr>';

// esse while ler caracter por caracter
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);
    // fgetc : faz ler caracter pro caracter
}
echo '<br>';
fclose($arquivo);
 
echo '<hr>';
 
$arquivo = fopen('teste.txt', 'r+');
// r+: ler e possibilita mudanças no texto
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);
 
echo "Fim!";