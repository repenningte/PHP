<?php

class Adotante {
    public $nome = "Laura Martins";
    public $idade = 20;
    public $telefone = "1199999-9999";
    public $email = "laura@email.com";
    public $endereco = "Rua das Flores, 100";
    public $temOutrosAnimais = true;
    public $experienciaComPets = "Sim, já teve gatos.";
    public $animalAdotado = null;
    }
 
    function exibirAdotante() {
        echo "Nome: $this->nome, Idade: $this->idade, Email: $this->email";
    }
 
    function adotarAnimal($animal) {
        $this->animalAdotado = $animal;
    }
 
    function verificarIdade() {
        return $this->idade >= 18 ? "Pode adotar" : "Não pode adotar";
    }
 
    function temExperiencia() {
        return $this->experienciaComPets;
    }
 
    function listarContato() {
        echo "Telefone: $this->telefone, Email: $this->email";
    }
 
    function verificarOutrosAnimais() {
        return $this->temOutrosAnimais ? "Sim" : "Não";
    }
 
    function cancelarAdocao() {
        $this->animalAdotado = null;
    }
 
    function resumoAdotante() {
        echo "Nome: $this->nome, Animal adotado: " . ($this->animalAdotado ? $this->animalAdotado->nome : "Nenhum");
    }

?>