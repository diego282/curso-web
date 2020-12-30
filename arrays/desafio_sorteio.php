<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de Neve", "Cinderela"];
$seleção = array_rand($nomes); // retorna um indice aleatorio
echo "<div center><h1>$nomes[$seleção]</h1></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>