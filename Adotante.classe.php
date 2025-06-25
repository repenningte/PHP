<?php

class Adotante {
    public $nome = "Teresa Repenning";
    public $idade = 18;
    public $telefone = "5199106-8668";
    public $email = "teresarepenning03@gmail.com";
    public $endereco = "Rua Aparício Mariense, 215";
    public $temOutrosAnimais = true;
    public $experienciaComPets = "Sim, já teve gatos e cachorros.";
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