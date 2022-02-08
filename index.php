<?php 
 namespace App;

 use App\Player;
 use App\Ennemy; 
 use App\Heros;



 require 'vendor/autoload.php';

 $hero = new Heros;
 echo $hero->getHp()."<br>";
 echo $hero->setBonushp()."<br>";
 echo $hero->getArmor()."<br>";
 var_dump($hero);

 $minion = new Minion;
 echo $minion->getHp().'<br>';
 echo $minion->getDamages()."<br>";
 var_dump($minion);

 $lieutenant_minion = new Lieutenant_minion;
 echo $lieutenant_minion->getHp().'<br>';
 echo $lieutenant_minion->getDamages()."<br>";
 var_dump($lieutenant_minion);

 $chef_minion = new Chef_minion;
 echo $chef_minion->getHp().'<br>';
 echo $chef_minion->getDamages()."<br>";
 var_dump($chef_minion);



echo $chef_minion->setAtq($hero->getDamages())."<br>";


var_dump($hero)."<br>";
echo $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
echo $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
var_dump($hero)."<br>";

















