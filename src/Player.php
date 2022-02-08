<?php 

namespace App;

class Player
{
    public $hp;
    public $atq;

    /* Attaque du joueur*/
    public function setAtq($atq)
    {
        $this->hp = $this->hp - $atq;
        return $this->hp;
    }
    /*Dégats infligés par les ennemies en tenant compte de l'armure du héros*/
    public function setDamagesDealt($atq)
    {
        if($this->armor > 0){
            
            $this->armor = $this->armor - $atq ;
            return $this->armor;
        }

        else if($this->armor < 0){
            
            $this->hp = $this->hp + $this->armor;
            $this->armor = 0;
            if($this->hp <= 0){
                echo "vous êtes mort";
            }
            else{

            return $this->hp;
            }
        }

        else{

            $this->hp = $this->hp - $atq ;
            
            if($this->hp > 0){

                return $this->hp;
            }
            else{
                
                echo "vous êtes mort";
            }
            
        }
    }
    
}