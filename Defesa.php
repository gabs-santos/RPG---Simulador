<?php

include_once("Item.php");

class Defesa extends Item 
{
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct($name, $tamanho, $classe) 
    {
        parent::__construct($name, $tamanho, $classe);
    }
}