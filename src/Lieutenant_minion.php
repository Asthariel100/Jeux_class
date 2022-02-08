<?php

namespace App;

use App\Player;

class Lieutenant_minion extends Player
{
    
    function __construct()
    {
        $this->hp =30;
        $this->atq = 30;
        $this->getHp();
        $this->getDamages();
    }
    public $hp = 30;
    public $atq =30;
    
    public function getHp()
    {
        return $this->hp;  
    }
    public function getDamages()
    {
        return $this->atq;
    }
}