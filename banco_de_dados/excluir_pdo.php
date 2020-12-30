<div class="titulo">PDO: Excluir</div>

<?php
error_reporting(E_ERROR);
require_once "pdo_conexão.php";
$sql = "DELETE FROM cadastro WHERE id = :id";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 7])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}