<?php

require_once 'Animal.classe.php';
require_once 'Cachorro.classe.php';
require_once 'Gato.classe.php';
require_once 'Adotante.classe.php';

$animal = new Animal(nome: "Aipim", especie: "Mamífero", idade: 5, sexo: "Macho", cor: "Branco", status: "Disponível", chipado: false);
$animal->exibirFicha();
echo "<hr>";

$cachorro = new Cachorro(nome: "Jade", raca: "Dogo Argentino", porte: "grande", nivelEnergia: 10; vacinado: false, vermifugaddo: true, sociavel: false, adestrado: false);
$cachorro->exibirCachorro():
echo "<hr>";

$gato = new Gato(nome: "Kiara", pelagem: "Peluda", castrado: false, independente: 7, vacinado: true, curioso: true, adoraColo: false, usaCaixaAreia: true);
$gato->exibirGato();
echo "<hr>";

$adotante = new Adotante(nome: "Teresa Repenning", idade: 18, telefone: "5199106-8668", email: "teresarepenning03@gmail.com", endereco: "Rua Aparício Mariense, 215", temOutrosAnimais: true, experienciaComPets: "Sim, já teve gatos e cachorros", animalAdotado: null);
$adotante->adotarAnimal(animal: $cachorro);
$adotante->exibirAdotante();
echo "<hr>";

$adotante->resumoAdotante();
?>