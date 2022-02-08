<?php

namespace App;

use App\Player;

class Chef_minion extends Player
{
   
    function __construct()
    {
        $this->hp =100;
        $this->atq = 400;
        $this->getHp();
        $this->getDamages();
    }
    
    public function getHp()
    {
        return $this->hp;  
    }
    public function getDamages()
    {
        return $this->atq;
    }
}
