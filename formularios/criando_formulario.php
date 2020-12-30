<div class="titulo">Formulário</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php // o link acima foi pego da Web, e um link com confugurações CSS de Bootsrap para nosso formulário
?>
<h2>Cadastro</h2>

<?php
error_reporting(E_ERROR);
if (count($_POST) > 0) {
    $erros = [];

    // isset($_POST['nome'])
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y',
            $_POST['nascimento']
        );
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }
    // aqui inicia o coloca limite minimo e maximo para quantidade de filhos
    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    // aqui termina o coloca limite minimo e maximo para quantidade de filhos
    if (!filter_var($_POST['filhos'],FILTER_VALIDATE_INT,$filhosConfig ) && $_POST['filhos'] != 0) {
         // aqui conserta o bug de o 0 não funcionar
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20).';
    }

    $salarioConfig = ['options' => ['decimal' => ',']]; // aqui fala ser for decimal e separdo por virgula
    if (!filter_var( $_POST['salario'], FILTER_VALIDATE_FLOAT,$salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }
}
?>

<?php foreach ($erros as $erro) : ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
    <?= "" // $erro 
    ?>
    <!-- </div> -->
<?php endforeach // esse foreach percorre os erros?>

<form action="#" method="post">
    <div class="form-row">

        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de Filhos" value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>

<?php
              // OBS IMPORTANTE SOBRE FORMULARIO

//<div class="form-row"> Permite coloca mais de um bloco de dados na mesma linha no formulario
//<div class="form-group col-md-6"> Define a quantidade de colunas que vai usar, das 12 disponiveis, ou seja, o tamanho da tela na horizontal
//placeholder="Site" Coloca oq vc quer dentro da caixa feita pelo formulario, como mensagem de aviso, de que dados inserir ali
// form-row usado para cada caixa(linha) de texto assim que o espaço de 12 colunas acabar
//class="btn btn-primary btn-lg Faz fica azul e maior o botão
//  value="<?= $_POST['salario'] ?/>" faz o dado inserido ficar na caixa de texto
// filter_input(INPUT_POST, parametro) Falar ser o parametro foi passado ou n
// !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL
// filter_var: Seu objetivo é filtrar e validar informações
//FILTER_VALIDATE_EMAIL: E o filtro para email
// !filter_var($_POST['site'], FILTER_VALIDATE_URL
//FILTER_VALIDATE_URL : E o filtro para site
// type="number": coloca as setas para inserir um nome inteiro
// FILTER_VALIDATE_INT valida o int
//FILTER_VALIDATE_FLOAT Valida o float
// class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?/>" e  <div class="invalid-feedback">
// setença acima seta os erros no seus devidos lugar sem precisar do echo, e em vermelho