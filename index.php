<?php

use Projetophp\MensageirosFactory\MensageiroFactory;

use Projetophp\PersonagensFactory\PersonagensFactory;

require_once "vendor/autoload.php";

$mensageiros = new MensageiroFactory();

$enviar = $mensageiros->createInstance("whatsapp");

$enviar->envia();

echo "\n";

$personagens = new PersonagensFactory();

$personagem = $personagens->createInstance("guerreiro");

$personagem->atacar();

echo "\n";