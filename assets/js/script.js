var animationInterval;
var spriteSheet = document.getElementById("sprite-image");
var button1 = document.getElementById("attack");
var widthOfSpriteSheet = 444;
var widthOfEachSprite = 150;


function stopAnimation() {
    clearInterval(animationInterval);
}

function startAnimation() {
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

function punch(){
    stopAnimation();
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
            stopAnimation();
            startAnimation();
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

button1.addEventListener('click', punch);

//Start animation
startAnimation();