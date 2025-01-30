window.onload = choosePic;

var myPix = new Array("images/Garden2.png","images/Garden3.png","images/FishingShaders.png","images/TrainStation.png","images/VexillumIsometric.png");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];
    }