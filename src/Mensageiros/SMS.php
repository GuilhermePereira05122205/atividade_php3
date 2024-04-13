<?php

namespace Projetophp\Mensageiros;

use Projetophp\Mensageiros\Mensagem;

class SMS implements Mensagem{
    public function envia(){
        echo "Enviando mensagem pelo SMS";
    }
}