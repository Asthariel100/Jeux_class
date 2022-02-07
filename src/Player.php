<?php 

namespace App;

abstract class Player
{
    /*Nombre de points de vie*/
    abstract public function hp();

    /*Points de dégats*/
    abstract public function damages();

    /* Attaque du joueur*/
    public function atq()
    {
        return hp()-damages();
    }
    /*Dégats infligés par les ennemies en tenant compte de l'armure du héros*/
    public function damages_dealt()
    {
        return hp()-(damages()-armor());
    }
    

}