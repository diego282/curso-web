<div class="titulo">Criar Banco de Dados</div>

<?php
require_once "conexao.php";
error_reporting(E_ERROR);

$conexao = novaConexao(null);
$sql = "CREATE DATABASE IF NOT EXISTS curso_php";
// CREATE DATABASE: criar um banco de dados: ser ja existir da erro
// CREATE DATABASE IF NOT EXISTS: criar o banco ser não existir o memso

$resultado = $conexao->query($sql);

if ($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro:" . $conexao->error;
}
$conexao->close();