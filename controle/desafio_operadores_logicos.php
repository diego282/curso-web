<div class="titulo">Desafio Op. Lógico</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 52' e sorvete
    - Se apenas um for executado -> TV 32' e sorvete
    - Se nenhum for executado -> Fica em casa, mas saudável 
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 - Terça</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 - Quinta</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>

</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['t1'];
echo $_POST['t2'];
echo '<br>';
// sinal de dupla negação retorá ser e falso ou true
var_dump(!!$_POST['t1']);
var_dump(!!$_POST['t2']);
echo '<br>';

if ($_POST['t1'] == 1 && $_POST['t2'] == 1) {
    echo "Irá comprar a TV de 52' polegada e tomar sorvete.";
} else if (
    $_POST['t1'] == 1 && $_POST['t2'] == 0 ||
    $_POST['t1'] == 0 && $_POST['t2'] == 1
) {
    echo "Irá comprar a TV de 32' polegada e vão tomar sorvete.";
} else {
    echo "A família ficará em casa, e não tomará sorvete.";
}
