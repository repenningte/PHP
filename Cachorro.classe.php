<?php

class Cachorro {
    public $nome = "Jade";
    public $raca = "Dogo Argentino";
    public $porte = "grande";
    public $nivelEnergia = 10;
    public $vacinado = false;
    public $vermifugado = true;
    public $sociavel = false;
    public $adestrado = false;
    }
 
    function exibirCachorro() {
        echo "Nome: $this->nome, Raça: $this->raca, Porte: $this->porte, Energia: $this->nivelEnergia, Vacinado " . ($this->vacinado ? "Sim" : "Não");
    }

    function vacinar() {
        $this->vacinado = true;
    }

    function verificarAdestramento() {
        return $this->adestrado ? "Adestrado" : "Não adestrado";
    }

    function atualizarNívelEnergia($valor) {
        $this->nivelEnergia = $valor;
    }

    function indicarPorte() {
        return $this->porte;
    }

    function socializar() {
        $this->sociavel = true;
    }

    function iniciarAdestramento() {
        $this->adestrado = true;
    }

    function resumoCachorro() {
        echo "Nome: $this->nome, Raça: $this->raca, Porte: $this->porte";
    }

?>