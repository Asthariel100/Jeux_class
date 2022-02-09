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

     function combat($a,$b) {
    $a->setAtq($b->getDamages());
  }

  if (isset($_GET['hello'])) {
    combat($chef_minion,$hero);
  }
    
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
    <h1 id="test"><h1>
        <h2 id="test2"></h2>
        <h2 id="test3"></h2>
        <h2 id="test4"></h2>
    <a href='index.php?hello=true'>Run PHP Function</a> 
        <button id="combat">FIGHT!</button>
        
    <script>

         var statsHero = <?php echo json_encode($hero); ?>;
         var showHero = document.getElementById('test');
        showHero.innerHTML = "HP " + statsHero['hp']+"<br>ATQ"+statsHero['atq']+"<br>ARMOR "+statsHero['armor'];;

        var statsMinions = <?php echo json_encode($minion); ?>;
        var showMinions = document.getElementById('test2');
        showMinions.innerHTML = "HP " + statsMinions['hp']+"<br>ATQ "+statsMinions['atq'];;

        var statsLieutenantMinions = <?php echo json_encode($lieutenant_minion); ?>;
        var showLieutenantMinions = document.getElementById('test3');
        showLieutenantMinions.innerHTML = "HP " + statsLieutenantMinions['hp']+"<br>ATQ "+statsLieutenantMinions['atq'];

        var statsChefMinions = <?php echo json_encode($chef_minion); ?>;
        var showChefMinions = document.getElementById('test4');
        showChefMinions.innerHTML = "HP " + statsChefMinions['hp']+"<br>ATQ "+statsChefMinions['atq'];

    //     document.onkeydown = clavier;
    //     function clavier(e) {
    //         if(e.keyCode == '38') 
    //         {
    //              console.log('test');
    //             combat();
    //         }
    //     }
    //     document.getElementById("combat").addEventListener("click", combat);

    //  function combat(a, statsChefMinions['hp'])
    //  {   
    //       a = <?php $chef_minion->setAtq($hero->getDamages()); ?>
    //       statsChefMinions['hp'] = a;
    //  }
    

    </script>

</body>
</html>
