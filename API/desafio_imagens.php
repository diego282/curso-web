<div class="titulo">Desafio Imagens</div>

<?php
error_reporting(E_ERROR);
// objetivo fazer que não mostre mais os links e sim as imagens
// nenhum, outro arquivo que não for jng pode passar!
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
  if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
    <?php if(strpos($arquivo, '.jnp') > 0  || strpos($arquivo,'.png') > 0 ) :?>
    <?php // if acima so deixar passar arquivo de imagens ?>
        <li>
            <img src="../files/<?= $arquivo ?>"height="120"/> 
    <?php // o qeu está na linha acima executar a imagem ?>
        </li>
    <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style> 