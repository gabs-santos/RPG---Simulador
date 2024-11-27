<?php 

include_once("Item.php");

class Magia extends Item
{
    private string $name; 
    private int $tamanho; 
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe)
    {
        parent::__construct($name, $tamanho, $classe);
    }
}