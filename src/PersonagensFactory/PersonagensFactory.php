<?php
namespace Projetophp\PersonagensFactory;

use Exception;
use Projetophp\Personagens\Arqueiro;
use Projetophp\Personagens\Barbaro;
use Projetophp\Personagens\Cavaleiro;
use Projetophp\Personagens\Guerreiro;

class PersonagensFactory{

    public function createInstance(String $nome){
        if($nome == "guerreiro"){
            return new Guerreiro();
        }else if($nome == "arqueiro"){
            return new Arqueiro();
        }else if($nome == "barbaro"){
            return new Barbaro();
        }else if($nome == "cavaleiro"){
            return new Cavaleiro();
        }

        return new Exception("classe não encaontrada");
    }
}