<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversão" id="conversão">
        <option value="Km-milha"> Km > Milha</option>
        <option value="milha-Km"> Milha > km</option>
        <option value="metro-Km"> Metros > km</option>
        <option value="Km-metros">km > Metros</option>
        <option value="fahrenheit-celsius"> fahrenheit > Celsius</option>
        <option value="Celsius-fahrenheit">Celsius > fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

echo "Valor usado:" . $_POST['param'] . '<br>';
echo " medida desejada:" . $_POST['conversão'] . '<br>';

$entrada = $_POST['param'];
$conversor = $_POST['conversão'];
$medida = " ";

switch ($_POST['conversão']) {
    case 'Km-milha':
        $resultado = $_POST['param'] / 1.609;
        $medida = 'milhas';
        $conversor = 'km';
        break;
    case 'milha-Km':
        $resultado =  $_POST['param'] * 1.609;
        $medida = 'km';
        $conversor = 'milha(s)';
        break;
    case 'metro-Km':
        $resultado =  $_POST['param'] / 1000; 
        $medida = 'km';
        $conversor = 'metro(s)';
        break;
    case 'Km-metros':
        $resultado =  $_POST['param'] * 1000;
        $medida = 'metros';
        $conversor = 'km';
        break;
    case 'fahrenheit-celsius':
        $resultado =  ($_POST['param'] - 32) * 5/9; 
        $medida = 'celsius';
        $conversor = 'fahrenheit';
        break;
    case 'Celsius-fahrenheit':
        $resultado =  ($_POST['param'] * 9/5) + 32;  
        $medida = 'fahrenheit';
        $conversor = 'Celsius';
        break;
    default:
        echo "Nenhum valor calculado!!";
}

echo "<p> $entrada $conversor equivale á  $resultado $medida </p>";
