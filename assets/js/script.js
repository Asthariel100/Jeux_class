var animationInterval;
var spriteSheet = document.getElementById("sprite-image");
var button1 = document.getElementById("attack");
var widthOfSpriteSheet = 444;
var widthOfEachSprite = 150;

/* Animations Sprite de droite */

/* Fonction qui va stopper les animations */
function stopAnimationRight() {
    clearInterval(animationInterval);
}

/* Fonction qui va débuter les animations */
function startAnimationRight() {
  var position = widthOfEachSprite; //start position for the image
  const speed = 150; //in millisecond(ms)
  const diff = widthOfEachSprite; //difference between two sprites


    animationInterval = setInterval(() => {
        spriteSheet.style.backgroundPosition = `-${position}px 0px`; //280 POUR COURIR // 700 POUR TAPER

        if (position < widthOfSpriteSheet) {
            position = position + diff;
        } else {
        //increment the position by the width of each sprite each time
            position = widthOfEachSprite;
        }
        //reset the position to show first sprite after the last one
    }, speed);
}

/* Fonction pour taper */
function punchRight(){
    stopAnimationRight();
    var position = widthOfEachSprite; //start position for the image
    const speed = 150; //in millisecond(ms)
    const diff = widthOfEachSprite; //difference between two sprites

    spriteSheet.classList.add("slideOutLeft");
    setTimeout(function(){
        spriteSheet.classList.remove("slideOutLeft");
    }, 2000);

    animationInterval = setInterval(() => {

        spriteSheet.style.backgroundPosition = `-${position}px 700px`; //280 POUR COURIR // 700 POUR TAPER

        setTimeout(function(){
            stopAnimationRight();
            startAnimationRight();
        }, 800);

        if (position < widthOfSpriteSheet) {
            position = position + diff;
            
        } else {
          //increment the position by the width of each sprite each time
            position = widthOfEachSprite;
            
        }
          //reset the position to show first sprite after the last one
    }, speed);
    
}


/* Animation du Sprite de gauche */
var animationInterval2;
var button2 = document.getElementById("attack2");
var spriteSheet2 = document.getElementById("sprite-image2");
var widthOfSpriteSheet2 = 865;
var widthOfEachSprite2 = 145;

/* Fonction qui va stopper les animations */
function stopAnimationLeft() {
    clearInterval(animationInterval2);
}

/* Pour démarrer l'animation */
function startAnimationLeft() {
    var position = widthOfEachSprite2; //start position for the image
    const speed = 250; //in millisecond(ms)
    const diff = widthOfEachSprite2; //difference between two sprites


        animationInterval2 = setInterval(() => {
            spriteSheet2.style.backgroundPosition = `-${position}px 560px`; //280 POUR COURIR // 700 POUR TAPER

            if (position < widthOfSpriteSheet2) {
                position = position + diff;
            } else {
            //increment the position by the width of each sprite each time
                position = widthOfEachSprite2;
            }
          //reset the position to show first sprite after the last one
        }, speed);
}

/* Fonction pour taper */
function punchLeft(){
    stopAnimationLeft();

    var position = widthOfEachSprite2; //start position for the image
    const speed = 350; //in millisecond(ms)
    const diff = widthOfEachSprite2; //difference between two sprites

    spriteSheet2.classList.add("slideOutRight");
    setTimeout(function(){
        spriteSheet2.classList.remove("slideOutRight");
    }, 2000);

    animationInterval2 = setInterval(() => {

        spriteSheet2.style.backgroundPosition = `-${position}px 798px`; 

        setTimeout(function(){
            stopAnimationLeft();
            startAnimationLeft();
        }, 800);

        if (position < widthOfSpriteSheet2) {
            position = position + diff;
            
        } else {
          //increment the position by the width of each sprite each time
            position = widthOfEachSprite2;
            
        }
          //reset the position to show first sprite after the last one
    }, speed);
    
}



//Tous les événements
startAnimationRight();
startAnimationLeft();
button1.addEventListener('click', punchRight);
button2.addEventListener('click', punchLeft);




