<?php
 namespace Projetophp\MensageirosFactory;

use Exception;
use Projetophp\Mensageiros\Email;
use Projetophp\Mensageiros\Mensagem;
use Projetophp\Mensageiros\SMS;
use Projetophp\Mensageiros\Whatsapp;

class MensageiroFactory{

    public function createInstance($nome): Mensagem{
        if($nome == "whatsapp"){
            return new Whatsapp();
        }else if($nome == "SMS"){
            return new SMS();
        }else if($nome == "email"){
            return new Email();
        }

        return new Exception("Classe não encontrada");
    }
 }




?>