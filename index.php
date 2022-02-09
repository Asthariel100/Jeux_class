<?php 

namespace App;

use App\Player;
use App\Ennemy; 
use App\Heros;



require 'vendor/autoload.php';


$hero = new Heros;
//  echo $hero->getHp()."<br>";
//  echo $hero->setBonushp()."<br>";
//  echo $hero->getArmor()."<br>";
//  var_dump($hero);

//  $minion = new Minion;
//  echo $minion->getHp().'<br>';
//  echo $minion->getDamages()."<br>";
//  var_dump($minion);

//  $lieutenant_minion = new Lieutenant_minion;
//  echo $lieutenant_minion->getHp().'<br>';
//  echo $lieutenant_minion->getDamages()."<br>";
//  var_dump($lieutenant_minion);

$chef_minion = new Chef_minion;
//  echo $chef_minion->getHp().'<br>';
//  echo $chef_minion->getDamages()."<br>";
//  var_dump($chef_minion);


/* 
for($i=0;$i<5;$i++){
    $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
    $chef_minion->setAtq($hero->getDamages())."<br>";
    $hero->randomBonus();
} */



// var_dump($hero)."<br>";
// echo $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
// echo $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
// var_dump($hero)."<br>";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>BAGARRE</title>
</head>
<body>
    <h1 class="title">Battle For Life</h1>
    <section class="mainContainer">

        <div id="sprite-container2">
            <div id="sprite-image2"></div>

            <button id="attack2">Attaquer</button>

            <div id="bar">
                <div id="health"></div>
                <div id="lost"></div>
                <div id="heal"></div>
            </div>

        </div>

        <div id="sprite-container">
            <div id="sprite-image"></div>

            <button id="attack">Attaquer</button>

            <div id="bar">
                <div id="health"></div>
                <div id="lost"></div>
                <div id="heal"></div>   
            </div>

        </div>

    </section>
    
    <script  type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>