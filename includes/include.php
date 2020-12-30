<div class="titulo">Include</div>

<?php
echo 'Executei essa linha do arquivo include<br>';
include('includes_arquivo.php');
// include chama outro arquivo
// não e possivel chamar 2 vezes o mesmmo arquivo da problema, como vimos exemplo abaixo
// include('include_arquivo.php');

echo soma(3, 8) . '!<br>';
echo "O conteúdo da variável é '{$variavel}'.";