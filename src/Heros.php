<?php

namespace App;

use App\Player;

 class Heros extends Player
{
    public $armor;
    
    function __construct()
    {
        $this->hp =200;
        $this->atq = 15;
        $this->armor = 0;
        $this->death();
    }

    public function getHp()
    {

        return $this->hp;
    }

    public function getDamages()
    {
        return $this->atq;
    }
    public function getArmor()
    {
        return $this->armor;
    }

    public function setBonusHp()
    {
        return $this->hp = $this->hp + 50;
    }

    public function setArmorBonus()
    {
        return $this-> armor = $this->armor + 20;
    }

    public function death()
    {
        if($this->hp <= 0)
        {
            echo "vous êtes mort";
        }
    }

    public function randomBonus()
    {
        $randBonushp = rand(0,100);

        if($randBonushp < 30)
        {
           return $this->setBonusHp();
        }
        else
        {
            echo "pas de bonus  de vie pour ce tour<br>";
        }

        $randBonusArmor = rand(0, 100);

        if($randBonusArmor < 20)
        {
            return $this->setArmorBonus();
        }
        else
        {
            echo "pas de bonus d'armure pour ce tour<br>";
        }
    }
}


