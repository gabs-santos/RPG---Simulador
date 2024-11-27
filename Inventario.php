<?php
include_once("Item.php");

 class Inventario 
 {
    private int $capacidadeMaxima;
    private array $item = [];

    public function __construct(int $capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function getCapacidadeMaxima() {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        if ($capacidadeMaxima < 20) {
            echo 'Capacidade de itens começa em 20<br>';
        } else {
            $this->capacidadeMaxima = $capacidadeMaxima;
        }
    }

    public function getItem(): array {
        return $this->item;
    }   

    public function adicionar(Item $adicionar) {
        $this->item[] = $adicionar;
        echo " -Item: {$adicionar->getName()}<br>
                Tamanho: {$adicionar->getTamanho()} <br> 
                Classe: {$adicionar->getClasse()} adicionado ao inventario! <br>";
        return $this->capacidadeLivre();
    }

    public function remover(Item $remover) {
        foreach ($this->item as $indice => $adicionar) {
            if ($adicionar->getName() === $remover->getName()) {
            unset($this->item[$indice]);
            echo "-Item: {$remover->getName()} removido do inventario! <br>";
            return $this->capacidadeLivre();
            }
        }
    }

    public function aumentarCapacidade(int $aumento): void {
        $this->capacidadeMaxima += $aumento;
        echo "Capacidade atualizada do inventario: {$this->capacidadeMaxima}<br>";
    }

    public function capacidadeLivre() {
        $itensInventario = count($this->item);
        $capacidadelivre = $this->capacidadeMaxima - $itensInventario; 
        echo "Capacidade livre do inventario: {$capacidadelivre} itens <br><br>";
    }

    public function inventarioCheio() {
        if ($this->capacidadeLivre() <= 0) {
            echo 'Inventario cheio';
        } 
    }
}