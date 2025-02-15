<?php
include 'config.php';
?>

<html>

<head>
    <title>RGDPS 2.2 Website</title>
    <link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<style>

.slider-thumb2::before {
	position: absolute;
	content: "";
	left: 60%;
	top: 3%;
	width: 300px;
	height: 300px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}
.slider-thumb4::before {
	position: absolute;
	content: "";
	left: 7%;
	top: 3%;
	width: 100px;
	height: 100px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}

.slider-thumb3::before {
	position: absolute;
	content: "";
	left: 30%;
	top: 65%;
	width: 700px;
	height: 700px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}

.slider-thumb::before {
	position: absolute;
	content: "";
	left: 0%;
	top: 20%;
	width: 500px;
	height: 500px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}
.slider-thumb5::before {
	position: absolute;
	content: "";
	left: 10%;
	top: 120%;
	width: 500px;
	height: 500px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}
.slider-thumb6::before {
	position: absolute;
	content: "";
	left: 70%;
	top: 150%;
	width: 200px;
	height: 200px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}
@keyframes sliderShape{
  0%,100%{
  border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  34%{
      border-radius: 70% 30% 46% 54% / 30% 29% 71% 70%;
    transform:  translate3d(0,5px,0) rotateZ(0.01deg);
  }
  50%{
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  67%{
    border-radius: 100% 60% 60% 100% / 100% 100% 60% 60% ;
    transform: translate3d(0,-3px,0) rotateZ(0.01deg);
  }
}

.slider-thumb7::before {
	position: absolute;
	content: "";
	left: 10%;
	top: 155%;
	width: 400px;
	height: 400px;
	background: #17141d;
	border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
	will-change: border-radius, transform, opacity;
	animation: sliderShape 5s linear infinite;
	display: block;
	z-index: -1;
	-webkit-animation: sliderShape 5s linear infinite;
}
@keyframes sliderShape{
  0%,100%{
  border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  34%{
      border-radius: 70% 30% 46% 54% / 30% 29% 71% 70%;
    transform:  translate3d(0,5px,0) rotateZ(0.01deg);
  }
  50%{
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  67%{
    border-radius: 100% 60% 60% 100% / 100% 100% 60% 60% ;
    transform: translate3d(0,-3px,0) rotateZ(0.01deg);
  }
}
.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
@font-face {
   font-family: pusab;
   src: url(fnt/Pusab.ttf);
}
@font-face {
   font-family: lemon;
   src: url(fnt/lemon.ttf);
}


* {
   font-family: pusab;
   color: white;
}
.p3 {
   font-family: pusab;
   color: white;
   font-size: 50px;
   -webkit-text-stroke: 2px #1c87c9;
}
.p6 {
   font-family: pusab;
   color: white;
   font-size: 80px;
   -webkit-text-stroke: 2px black;
}
.p7 {
   font-family: lemon;
   color: white;
   font-size: 30px;
   -webkit-text-stroke: 2px black;
}

.p1 {
  font-family: Heavitas;
}/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #995533;
  margin: auto;
  padding: 20px;
  width: 800px;
  height: 1200px;
  border: 4px solid Black;
border-radius: 25px;
}
@keyframes modal-content{
   from{ top: 0px;}
   to{top: 300px;}
}
/* The Close Button */

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.rope{
   position: absolute;
   width: 7%;
   left: 800px;
}
.rope:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.johnrickgd{
     width: 40%;
     bottom: 10px;
     right: 120px;
     position: relative;
}
.inbox{
     width: 10%;
     bottom: 100px;
     right: 120px;
     position: relative;
}
.rgdps{
     width: 10%;
     right: 120px;
     position: relative;
}
.like{
     width: 6%;
     right: 120px;
     position: relative;
}
.like:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.description{
     font-family: lemon;
     color: white;
     font-size: 25px;
     
}
.current {
     color: white;
     font-size: 35px;
     position: relative;
     top: 40px;
     right: 30px;
}
.current2 {
     color: white;
     font-size: 35px;
     position: relative;
     top: 40px;
     right: 30px;
}
.calc-grid{
     position: relative;
     left: 300px;
     top: 280px;

}
.calc-grid2{
     position: relative;
     left: 300px;
     top: 80px;

}
.message{
  background-color: #5C331F;
  margin: auto;
  padding: 20px;
  border: 4px solid Black;
  border-radius: 25px;
  width: 600px;
  height: 200px;
}

.messagecard2{
    bottom: 650px;
    position: relative;
}
.messagecard3{
    bottom: 600px;
    position: relative;
}
.close2{
   position: relative;
   width: 10%;
   color: white;
   float: right;
   font-size: 300px;
   font-weight: bold;
}
.close3{
   width: 120%;
   left: 900px;
   float: right;
   }
</style>


<body style="background: linear-gradient(#6D00FC, #330074);">
        <img src="files/messagerope.png" class="rope" id="mymtn">
            <!-- The Modal -->
            <center>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div class="messagecard">
      <div class="calc-grid">
    <div class="output">
        <div class="current" id="current">56</div>
    </div>
    <img class="like" src="files/like.png" onClick="addNumber(1)">
</div>
</div>
    <span class="close"><img src="files/close.png" class="close2"></span>
    <p class="p6">Messages</p>
      <div class="message">
    <img src="files/rgdps.png" class="rgdps">
    <img src="files/johnrickgd.png" class="johnrickgd">
    
    <p class="description">Hello Guest! Welcome to RGDPS Official Website! Click <a href="" color="blue" class="description">Here</a> to get started!</p>
</div>
</div>
<div class="messagecard2">
      <div class="message">
    <img src="files/rgdps.png" class="rgdps">
    <img src="files/johnrickgd.png" class="johnrickgd">
    
    <p class="description">Join Discord for more information!</p>
</div>
</div>
<div class="messagecard3">
      <div class="message">
    <img src="files/rgdps.png" class="rgdps">
    <img src="files/johnrickgd.png" class="johnrickgd">
    
    <p class="description">More Features soon!</p>
</div>
</div>
</div>
    <center>
    <div class="slider-thumb"></div>
    <div class="slider-thumb2"></div>
    <div class="slider-thumb3"></div>
    <div class="slider-thumb4"></div>
    <div class="slider-thumb5"></div>
    <div class="slider-thumb6"></div>
    <div class="slider-thumb7"></div>
        <img src="files/welcome.png" style="max-width: 40%; height: auto;">
        <br>
        <br>
        <br>
        <img src="files/logo.png" style="max-width: 90%; height: auto;">
        <br>
        <br>
        <img src="files/features.png" style="max-width: 40%; height: auto;">
        

        <div>
            <br>
            <br>
            <br>
            <!-- Upper buttons -->
            <a href="<?php echo $windows; ?>"><img src="files/windows.png" width="200" hspace="12" class="zoom"></a>
            <a href="<?php echo $android; ?>"><img src="files/android.png" width="200" hspace="12" class="zoom"></a>
            <a href="<?php echo $ios; ?>"target="_blank"><img src="files/iosicon.png" width="200" hspace="12" class="zoom"></a>
             <a href="<?php echo $geode; ?>"><img src="files/geode2.png" width="200" hspace="12" class="zoom"></a>
            <!-- Add buttons below -->
        </div>

        <br>

        <div>
            <!-- Lower buttons -->
            <a href="<?php echo $tools; ?>"target="_blank"><img src="files/tools.png" width="200" hspace="12" class="zoom"></a>
            <a href="<?php echo $demonlist; ?>"><img src="files/demonlist.png" width="200" hspace="12" class="zoom"></a>
            <a href="<?php echo $contest; ?>" target="_blank"><img src="files/gdpshub.png" width="200"
                    hspace="12" class="zoom"></a>
            <a href="<?php echo $stats; ?>" target="_blank"><img src="files/stats.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $mods; ?>" target="_blank"><img src="files/mods.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $fame; ?>" target="_blank"><img src="files/fame.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $song; ?>" target="_blank"><img src="files/song.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $youtube; ?>" target="_blank"><img src="files/youtube2.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $discord; ?>" target="_blank"><img src="files/discord.png" width="200" class="zoom"
                    hspace="12"></a>
            <a href="<?php echo $lvlreq; ?>" target="_blank"><img src="files/lvlreq.png" width="200" class="zoom"
                    hspace="12"></a>
                    <a href="<?php echo $info; ?>" target="_blank">
            <img src="files/info.png" width="200" class="zoom"
                    hspace="12"></a>
                    <a href="<?php echo $credits; ?>" target="_blank">
<img src="files/credits.png"  width="200" class="zoom"
                    hspace="12"></a>
            <!-- Add buttons below -->
        </div>
        <br>
                <br>
                <br>
         <img src="files/trailer.png" style="max-width: 70%; height: auto;">
                <br>
                <br>
        <iframe width="920" height="715" src="https://www.youtube.com/embed/AyBhS9iKMfQ">
</iframe>
                <br>
                <br>
                <img src="files/contesttxt.png" style="max-width: 70%; height: auto;">
                <br>
                <img src="files/spider.png" style="max-width: 40%; height: auto;">
        <img src="files/force.png" style="max-width: 40%; height: auto;">
                <br>
                <p class="p3">Time Left</p><p id="demo" class="p3"></p>
                <br>
                <br>
                <br>
                <br>
         <img src="files/about.png" style="max-width: 40%; height: auto;">
        <div class="text">
            <span class="white"><?php echo $about; ?></span>
        </div>

        <div class="text">
            <!-- Do not remove pls -->
            <span class="white">Template by <span class="blue"><u><a href="https://www.youtube.com/c/ParadoxGDPS"
                            target="_blank">Starmor</a>
                                                          <br>
                            <span class="p7">Improved by: <span class="blue"><u><a href="https://www.youtube.com/c/JohnRickGDOfficial"
                            target="_blank" class="p7">JohnRickGD</a>
    </center>
</body>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("mymtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 6, 2024 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<script>
    function addNumber(number) {
        const currentDiv = document.getElementById("current");
        const currentValue = parseInt(currentDiv.innerText);
        currentDiv.innerText = currentValue + number;
    }
</script>
</script>
</html>