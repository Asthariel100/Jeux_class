<?php

namespace App;

use App\Player;

 class Heros extends Player
{
    private $hp = 200;
    private $damages = 15;

    public function hp()
    {
    return $this->hp;
    }

    public function damages()
    {
    return $this->damages;
    }

    public function bonus_hp()
    {
        return $this->hp + 50;
    }
    
}


