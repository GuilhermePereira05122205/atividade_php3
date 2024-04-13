<?php
namespace Projetophp\Mensageiros;

use Projetophp\Mensageiros\Mensagem;

class Email implements Mensagem{
    public function envia(){
        echo "Envia mensagem pelo email";
    }
}