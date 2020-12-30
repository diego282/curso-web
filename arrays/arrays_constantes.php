<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS [0] ='banana'; // não e possivel mudar o valor de um arrays const
// FRUTAS[] = 'banana'; // tambem não e possivel alterar valor em um const em php
echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "Ford", "Fiesta"];
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];