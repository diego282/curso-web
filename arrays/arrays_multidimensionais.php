<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"

    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];
echo '<br>';
$dados []= [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "chaves"; // adicionar elemento especifico a um array
echo '<br>';
print_r($dados[2]); // visualizar um array especifico

unset($dados[1]); // quando vc tira q array, na linguagem php eles não são reorganizado
echo '<br>';
print_r($dados);
echo '<br>';

if(isset($dados[1000])) {
    var_dump($dados[1000]);
} else {
    echo "<br/> Index inexistente";
}