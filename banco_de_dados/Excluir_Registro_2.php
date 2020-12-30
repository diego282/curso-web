<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registro #02</div>

<?php
error_reporting(E_ERROR);
require_once "conexao.php";

$registros = [];
$conexao = novaConexao();

if($_GET['excluir']) { // apartir daq apagar o dados do banco desejado
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?"; // usar assim, pois da uma proteção contra ataques
    $stmt = $conexao->prepare($excluirSQL); // usar preare e passa a funcao de exluir
    $stmt->bind_param("i", $_GET['excluir']); // i: tipo da varivel a ser recebida
    $stmt->execute();
}

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;   
}

$conexao->close;
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <?=
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td>
                    <a href="exercicios.php?dir=banco_de_dados&file=Excluir_Registro_2&excluir=<?= $registro['id'] ?>" 
                        class="btn btn-danger"> <? //da a cor vermelha ao botão excluir?>
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>