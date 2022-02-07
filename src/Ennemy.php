<?php

namespace App;

use App\Player;

class Minion extends Player
{
    public function hp()
    {
        return 10;
    }
    public function damages()
    {
        return 10;
    }  
    
}

class Lieutenant_minion extends Player
{
    public function hp()
    {
        return 30;
    }
    public function damages()
    {
        return 30;
    }
}
class Chef_minions extends Player
{
    public function hp()
    {
        return 100;
    }
    public function damages()
    {
        return 100;
    }
}

