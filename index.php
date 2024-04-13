<?php

use Projetophp\MensageirosFactory\MensageiroFactory;

require_once "vendor/autoload.php";

$mensageiros = new MensageiroFactory();

$enviar = $mensageiros->createInstance("whatsapp");

$enviar->envia();