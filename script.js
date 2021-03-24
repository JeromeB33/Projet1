/*function init() {
    var article1 = new Audio("./Sons/Articles-intro.mp3");
    var article2 = new Audio('./Sons/Intro-eric.mp3');
  
    article1.loop = false;
    article2.loop = false;
  
    function once1() {  
    article1.load();
    article1.play(); 
    }
    function once2() {
    article2.play(); 
      }
    var btn1 = document.getElementById("test1");
    btn1.addEventListener('click', once1);
  
    var btn2 = document.getElementById("test2");
    btn2.addEventListener('click', once2);
  }
*/

function playAudio(){
    let son1= new audio("./Sons/Articles-intro.mp3");

    let buttonSon= document.getElementById("test1");
    buttonSon.addEventListener('click', son1.play());
}

/*
playSound = function () {
    var audio = new Audio('./Sons/Articles-intro.mp3');
    audio.loop = false;
    audio.play(); 
}*/
/*
function JouerSon() {
    var sound = document.getElementById("son1");
    sound.play();
}*/