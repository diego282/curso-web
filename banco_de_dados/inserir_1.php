<div class="titulo">Inserir Registro #01</div>

<?php
error_reporting(E_ERROR);
require_once "conexao.php";

$sql = "INSERT INTO cadastro

        (nome, nascimento, email, site, filhos, salario)
        VALUES (
          'Diego',
          '2001-10-29',
          'diego123@email.com.br',
          'https://diego123.sites.com.br',
          2,
          15000.87
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if ($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro:" . $conexao->error;
} 
$conexao->close();
