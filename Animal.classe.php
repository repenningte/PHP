<?php
  
class Animal {
    public $nome = "Aipim";
    public $especie = "Mamífero";
    public $idade = 5;
    public $sexo = "Macho";
    public $cor = "Branco";
    public $status "Disponível";
    public $chipado = "false";

    function exibirFicha() {
        echo "Nome: $this->nome, Espécie: $this->especie, Idade: $this->idade anos, Sexo: $this->sexo, Cor: $this->cor, Status: $this->status, Chipado: " . ($this->chipado ? "Sim" : "Não");
    }
 
    function alterarStatus($novoStatus) {
        $this->status = $novoStatus; 
    }

    function verificarIdade() {
        if ($this->idade < 1) return "Filhote";
        elseif ($this->idade > 7)return "Adulto";
        else return "Idoso";
    }

    function marcarComoChipado() {
        $this->chipado = true;
    }

    function desmarcarChipado() {
        $this->chipado = false;
    }

    function verificarSexo() {
        return $this->sexo;
    }

    function resumoAnimal() {
        echo "Nome: $this->nome, Espécie: $this->especie, Status: $this->status";
    }
}

?>