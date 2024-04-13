<?php

namespace Projetophp\Mensageiros;

use Projetophp\Mensageiros\Mensagem;

class Whatsapp implements Mensagem{
    public function envia(){
        echo "Envia mensagem por whatsapp";
    }
}