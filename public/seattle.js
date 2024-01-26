window.onload = choosePic;

var myPix = new Array("images/seattle/Apr10.jpeg", "images/seattle/apr11.jpeg", "images/seattle/apr12.jpeg", "images/seattle/apr13.jpeg", "images/seattle/apr14.jpeg", "images/seattle/apr102.jpeg", "images/seattle/apr103.jpeg", "images/seattle/apr105.jpeg", "images/seattle/apr106.jpeg", "images/seattle/apr107.jpeg", "images/seattle/apr108.jpeg", "images/seattle/apr112.jpeg", "images/seattle/apr113.jpeg", "images/seattle/apr114.jpeg", "images/seattle/apr115.jpeg", "images/seattle/apr116.jpeg", "images/seattle/apr117.jpeg", "images/seattle/apr122.jpeg", "images/seattle/apr132.jpeg", "images/seattle/aprl104.jpeg");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];
    }