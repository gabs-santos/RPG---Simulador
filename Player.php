<?php

require_once('Inventario.php') ;
require_once('Item.php');

class Player {
    private $nickName;
    private $nivel;
    private $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
        $this->nivel = 1;
        $this->inventario = new Inventario(20);
    }
    

    public function getNickName(): string {
        return $this->nickName;
    }

    public function setNickName(string $nickName): void {
        if (empty($nickName)) {
            echo 'Insira um nome para o seu player: <br>';
        } else {
            $this->nickName = $nickName;
        }
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }
    
    public function setInventario(Inventario $inventario): void {
        $this->inventario = $inventario;
    }

    public function subirNivel() {
        $this->nivel++;
        $aumento = $this->nivel * 3;
        $this->inventario->aumentarCapacidade($aumento);
    }
    public function coletarItem(Item $item ) {
        $this->inventario->adicionar($item);
        echo "Item: {$this->getName()} coletado<br>";
        }


    public function soltarItem(Item $item) {
        foreach ($this->inventario as $coletar => $inventarioItem) {
            if ($inventarioItem === $item) {
                unset($this->inventarioItem[$coletar]);
            }
        }
        if ($this->inventario->remover($item)); {
            echo "O item foi removido com sucesso<br>";
        }
    }
}