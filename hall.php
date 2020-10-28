<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<style>
body {
  font-family: Arial, Helvetica, sans-serif;background:	#ccffee;
}
img{
	float:left;
	vertical-align:center;
	width:90px;
}
h1{
	text-align: center;
	color:red;
	font-size:40px;
}
h2{
	text-align: center;
	color:green;
	font-size:25px;
}

.navbar {
  overflow: hidden;
  background-color: green;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/*
 for picture designing............

*/

.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
  float:center;
  margin-top:8px;
  padding-left:15px;
  margin-right:10px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 70%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
/*.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  float:center;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}*/

.active {
  background-color: #717171;
}

/* Fading animation */
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#footer{
      height:200px;
      padding:5px;
      margin-top:500px;
      background:#900C3F;
      
      
    }
    #footer:hover{
      background:black;
      color:green;
    }
    #footer td{
      margin-left:100px;
    }
    
    #contact{ 
         float:left;
       width:400px;
    }
    
    #contact h2{
      border-bottom:1px solid black;
    }
    
    #social{
       float:left;
       width:400px;
    }
    
    #social h2{
      border-bottom:1px solid black;
    }
    #About{
       float:left;
       width:400px;
    }
    
    #About h2{
      border-bottom:1px solid black;
    }
    #About p{
      background:white;
      padding:15px;
    }
    #date h3{
      float:left;
      padding:15px;
      margin-bottom:10px;
    }

</style>
</head>
<body>

	<div>
		<div>
			<img src="logo.png">
		</div>
		<div>
		<h1>Rajshahi University Of Engineering & Technology</h1>
		<h2>Hall Management</h2>
	</div>
	</div>


<div class="navbar">
  <a href="#home">Home</a>
  <a href="news.php">News</a>
  <a href="admin_login.php">Admin</a>
  <a href="facilties1.php">Facilities</a>
  <a href="register.php">Sign up</a>
  <a href="for_login.php">Sign in</a>
  <div class="dropdown">
    <button class="dropbtn">Halls
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="zia_hall.php">Shahid President Ziaur Rahman Hall</a>
      <a href="Shahid_hamid.php">Shahid Abdul Hamid Hall</a>
      <a href="Tinshed.php">Tinshed hall </a>
      <a href="shahidul_hall.php">Shahid Shahidul islam hall</a>
      <a href="Mujibur.php">Bangubondu Sheikh Mujibur Rahman hall</a>
      <a href="Selim.php">Shahid Lt. Selim Hall</a>
      <a href="hasina.php">Deshratna Sheikh Hasina Hall</a>
    </div>
  </div> 
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/bangobandhu_sheikh_mujibur_rahman_hall.jpg" alt="Bangobandhu sheikh mujibur rahman hall" title="Bangobandhu sheikh mujibur rahman hall" id="wows1_0"/></li>
    <li><img src="data1/images/deshratna_sheikh_hasina_hall.jpg" alt="Deshratna Sheikh Hasina Hall" title="Deshratna Sheikh Hasina Hall" id="wows1_1"/></li>
    <li><img src="data1/images/shahid_abdul_hamid_hall.jpg" alt="Shahid Abdul Hamid Hall" title="Shahid Abdul Hamid Hall" id="wows1_2"/></li>
    <li><img src="data1/images/shahid_lt._selim_hall.jpg" alt="Shahid Lt. Selim Hall" title="Shahid Lt. Selim Hall" id="wows1_3"/></li>
    <li><img src="data1/images/shahid_president_ziaur_rahman_hall.jpg" alt="Shahid President Ziaur Rahman Hall" title="Shahid President Ziaur Rahman Hall" id="wows1_4"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/shahid_shahidul_islam_hall.jpg" alt="javascript carousel" title="Shahid Shahidul islam hall" id="wows1_5"/></a></li>
    <li><img src="data1/images/tinshed_hall.jpg" alt="Tinshed hall" title="Tinshed hall" id="wows1_6"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="Bangobandhu sheikh mujibur rahman hall"><span><img src="data1/tooltips/bangobandhu_sheikh_mujibur_rahman_hall.jpg" alt="Bangobandhu sheikh mujibur rahman hall"/>1</span></a>
    <a href="#" title="Deshratna Sheikh Hasina Hall"><span><img src="data1/tooltips/deshratna_sheikh_hasina_hall.jpg" alt="Deshratna Sheikh Hasina Hall"/>2</span></a>
    <a href="#" title="Shahid Abdul Hamid Hall"><span><img src="data1/tooltips/shahid_abdul_hamid_hall.jpg" alt="Shahid Abdul Hamid Hall"/>3</span></a>
    <a href="#" title="Shahid Lt. Selim Hall"><span><img src="data1/tooltips/shahid_lt._selim_hall.jpg" alt="Shahid Lt. Selim Hall"/>4</span></a>
    <a href="#" title="Shahid President Ziaur Rahman Hall"><span><img src="data1/tooltips/shahid_president_ziaur_rahman_hall.jpg" alt="Shahid President Ziaur Rahman Hall"/>5</span></a>
    <a href="#" title="Shahid Shahidul islam hall"><span><img src="data1/tooltips/shahid_shahidul_islam_hall.jpg" alt="Shahid Shahidul islam hall"/>6</span></a>
    <a href="#" title="Tinshed hall"><span><img src="data1/tooltips/tinshed_hall.jpg" alt="Tinshed hall"/>7</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html slideshow</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
  
<!-- <div class="picture">
  <div class="slideshow-container">

   <div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="hall_image/zia.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div> 

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="hall_image/hamid.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="hall_image/tinshed.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="hall_image/shahidul.jpg" style="width:60%;position:center;">
  <div class="text" style="text-align:center"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5/7</div>
  <img src="hall_image/bongo.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 /7</div>
  <img src="hall_image/selim.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div>



<div class="mySlides fade">
  <div class="numbertext">7/ 7</div>
  <img src="hall_image/hasina1.jpg" style="width:60%">
  <div class="text" style="text-align:center"></div>
</div>

</div>


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
</div> -->

  <div id="footer">
         <div id="contact"> 
     <h2>Contact Us</h2>
     <form>
    
     Mailing Address:<input type="submit" value="pointbreak998@gmail.com" size="20" required /> <br>
     Mobile:    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;   <input type="submit" value="01757967689" size="20" required /><br>
     Address:  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; <input type="submit" value="RUET,Rajshahi" size="20" required /> <br>
     </form>
       
    </div>
    
    
    
     <div id="social"> <h2>Social Links</h2>
     <form>
    
     
     Facebook:&nbsp;&nbsp;<a href="https://www.facebook.com/zubayerhossain46.com" target="_blank"><img src="img/facebook.png" height="35px"/> <a/> <br>
     Instagram:&nbsp;&nbsp;<a href="https://www.instagram.com/zubayerhossain/" target="_blank"><img src="img/instragram.png" height="35px"/> <a/> <br>
    
     </form>
         
    </div>
    
    
     
    <div id="date"> <h3> copyright &copy;<?php echo date("M"); ?> &nbsp;  <?php echo date("Y"); ?> &nbsp; <?php echo date("D"); ?> </h3> </div>
    
    </div>



</body>
</html>
