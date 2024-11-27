<?php

include_once('Inventario.php');
include_once('Item.php');
include_once('Ataque.php');
include_once('Defesa.php');
include_once('Magia.php');
include_once('Player.php');

$ataque1 = new Ataque("Espada Longa", 2, "Ataque");
$defesa1 = new Defesa("Escudo de Doran", 7, "Defesa" );
$magia1 = new Magia("Eco de Luden", 5, "Magia");


$player1 = new Player("Pieci");
$player1->coletarItem($ataque1);






