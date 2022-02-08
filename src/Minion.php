<?php 
namespace App;

use App\Player;

class Minion extends Player
{
    function __construct()
    {
        $this->hp =10;
        $this->atq = 10;
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