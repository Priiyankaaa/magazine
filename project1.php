<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height:100%;
    width: 160px;
    z-index: 1;
    top: 4;
    left: 2;
    position:fixed;
    background:lightgrey;
    overflow-x: hidden;
    padding: 10px;
}

.sidenav a {

    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #262626;
    display: block;
    
}

.sidenav a:hover {
    color: #E2D3D3 ;
}
    
    .fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


.main {
    width: 40%;
    height: 150px;
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px;/* Increased text to enable scrolling */
    color: #E2D3D3;
    padding: 10px 10px;
    
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 10px;}
    .sidenav a {font-size: 18px;}
}

    
ul {
    list-style-type: none;
    margin-left: 100;
    padding: 0;
    width: 60%;
    background-color:lightgrey;
    border: none;
    cursor: pointer;
}

li a {
    display: inline-block;
    color: black;
    padding: 16px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom:none;
    cursor: pointer;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color: lightgrey  ;
    color: black;
}

li a:hover:not(.active) {
    background-color: lightgrey  ;
    color: floralwhite;
}

</style>
</head>
    
<body bgcolor="#262626">

<img src="cover1.png" height=200px width=100%  >
    
    
<div class="slideshow-container">
<br>
<br>

<div class="mySlides fade">
    
  <img src="vogue1.png"  width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
  
  <img src="bonappetite.png"  width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
   
  <img src="image1.png"  width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
   
  <img src="natgeo.png" width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
  <img src="image2.png"  width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
  <img src="fortune.png"  width= 320px height=500px align="right">
  
</div>
<div class="mySlides fade">
  <img src="ESPN.png"  width= 320px height=500px align="right">
  
</div>
    
        
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 


</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    
<div class="sidenav">
<ul>
    <li><a href="project1.php">HOME</a></li>
    <li><a href="hng1.php">USER</a></li>
    <li><a href="about1.php">ABOUT</a></li>
    <li><a href="adminlogin1.php">ADMIN</a></li>
    <li><a href="ratingpage.php">RATING</a></li>
  </ul>
</div>

<div class="main">
    <p> Online magazines is a huge trend that isn’t going away anytime soon. As more and more publishers want to give their readers a digital version of the magazines, they face numerous difficulties.</p>    
</div>   
    
</body>
</html>
