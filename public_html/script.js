window.onload = choosePic();

var myPix = new Array("../images/coleross/coleross1.jpg","../images/coleross/coleross2.jpg","../images/coleross/coleross3.jpg","../images/coleross/coleross4.jpg","../images/coleross/coleross5.jpg");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];

