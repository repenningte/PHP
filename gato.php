<?php

class Gatoa {
    public $nome = "Kiara";
    public $pelagem = "Curta";
    public $castrado = "false";
    public $independente = 7;
    public $vacinado = "true";
    public $curioso = "true";
    public $adoraColo = "false";
    public $usaCaixaAreia = "false";
}

    function exibirGato() {
        echo "Nome: $this->nome, Pelagem: $this->pelagem, Vacinado: " . ($this->vacinado ? "Sim" : "Não");
    }

    function castrar() {
        $this->castrado = true;
    }

    function verificarPelagem() {
        return $this->pelagem;
    }

    function atualizarIndependencia($grau) {
        $this->independente = $grau;
    }

    function vacinar() {
        $this->vacinado = true;
    }

    function resumoGato() {
        echo "Nome: $this->nome, Pelagem: $this->pelagem";
    }
 
    function ensinarCaixaAreia() {
        $this->usaCaixaAreia = true;
    }
 
    function verificarContato() {
        return $this->adoraColo ? "Gosta de colo" : "Não gosta de colo";
    }

?>