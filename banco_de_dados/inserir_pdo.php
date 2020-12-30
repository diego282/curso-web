<div class="titulo">PDO: Inserir</div>

<?php
error_reporting(E_ERROR);
require_once "pdo_conexão.php";

$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme Filho',
    'guidagalera@gmail.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    0,
    3000
)";

$conexao = novaConexao();
// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId(); // atraves do lastInsertId, volta o numero do seu cadastro
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}
unset($conexao);
