<?php 
 namespace App;

 use App\Player;
 use App\Ennemy; 
 use App\Heros;



 require 'vendor/autoload.php';

$hero = new Heros;

$minion = new Minion;


$lieutenant_minion = new Lieutenant_minion;


$chef_minion = new Chef_minion;


echo "Le héros récupère un bonus de vie (afficher la vie avant le bonus puis après)<br><br>";
echo "les statistique du joueur avant le bonus:<br>";
var_dump($hero);
echo '<br>';
echo "les statistique du joueur aprés le bonus:<br>";
$hero->setBonusHp();
var_dump($hero);
echo '<hr><br>';

echo "Le héros récupère un bonus d'armure (afficher la quantité d'armure avant puis après)<br><br>";
echo "les statistique du joueur avant le bonus d'armure:<br>";
var_dump($hero);
echo '<br>';
echo "les statistique du joueur aprés le bonus d'armure:<br>";
$hero->setArmorBonus();
var_dump($hero);
echo '<hr><br>';

echo "Le héros se fait un attaquer par un Minion(afficher la vie avant l'attaque puis après)<br><br>";
echo "les statistique du joueur avant le combat:<br>";
var_dump($hero);
echo '<br>';
echo "les statistique du joueur aprés le combat:<br>";
$hero->setDamagesDealt($minion->getDamages())."<br>";
var_dump($hero);
echo '<hr><br>';

echo "Le héros récupère de l'armure puis se fait attaquer par un lieutenant Minion (afficher la vie avant l'attaque puis après)<br>";
echo "les statistique du joueur avant le combat<br>";
var_dump($hero);
echo '<br>';
echo "les statistique du joueur aprés le combat:<br>";
$hero->setDamagesDealt($minion->getDamages())."<br>";
var_dump($hero);
echo '<hr><br>';

echo "Le héros doit combattre le chef Minion durant 5 tours. Avant chaque tour le héros a 1 chance sur 3 d'obtenir de l'armure et 1 chance sur 5 d'obtenir de la vie. A chaque round le héros attaque le chef Minion puis le chef Minion attaque le héros (Afficher pour chaque round: la valeur d'armure et la quantité de vie avant chaque attaque)<br>";
echo "les statistique du joueur avant le combat<br>";
var_dump($hero);
echo '<br>';
for($i=0;$i<5;$i++){
    var_dump($hero->getArmor());
    var_dump($hero->getHp());
     $hero->setDamagesDealt($chef_minion->getDamages())."<br>";
     $chef_minion->setAtq($hero->getDamages())."<br>";
     $hero->randomBonus();
    }
echo '<br>';
var_dump($hero);
echo '<hr><br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="test"><?php echo json_encode($hero); ?><h1>
    <script>
       
        var herohp = document.getElementById('test').innerHTML;
        console.log(herohp);
       
    </script>

</body>
</html>
