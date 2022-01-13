<?php 
session_start();

	include("connect.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html>
  <head>  
    <ul class="navbar">
      <li><a href="userlogin.php">USER</a></li>
      <li><a href="adminlogin.php">ADMIN</a></li>
            
      <li class="home-button"><a href="outhome.php">HOME</a></li>

      <ol class ="logo"><a href="#">Sta. Crus II Online Vaccination Scheduling System</a></ol>
    </ul>
<style>
/*Navigation Bar */
*{
  border: 0;
  padding: 0;
  margin: 0;
  outline: 0;
}

body{
  background-image: url("https://i.makeagif.com/media/1-12-2021/YsWRDA.gif");
  background-size: cover;
}
.navbar{
  list-style-type: none;
  margin: 0;
  padding: 5px 20px;
  overflow: hidden;
  background-color: #1e90ff;
  background-size: cover;
  font-size: 25px;
  font-weight: bold;
  box-shadow: 5px 5px 5px white; 
}
  
ol{
  font-size: 25px;
  font-family:Helvetica;
  padding: 10px 10px;
  text-align: left;
  color: white;
  }

ol :hover{
  color: black;
}

li a:hover{
    text-decoration: underline;
}

a{
    color: white;
    text-decoration: none;
    transition: all ease-in-out 250ms;
}
  
li{
  float: right;
  font-family:Helvetica;
  }

li a, .dropbtn {
  display: inline-block;
  color: WHITE;
  text-align: right;
  padding: 10px 10px;
  text-decoration: none;
  border-left: 1px solid black;
}
  
li a:hover, .profile:hover .dropbtn{
  background-color: rgb(69, 71, 190);
  color: white;
  transition: 0.4s;
}
  
  li.profile{
  display: inline-block;
}
  
.profile-content{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 15px;
  font-weight: bold;
}
  
.profile-content a{
  color: black;
  padding: 20px 20px;
  text-decoration: none;
  display: block;
  text-align: left;
}
  
.profile-content a:hover{
  background-color: black;
  color: white;
}
  
.profile:hover .profile-content {
    display: block;
}
/*Navigation Bar END*/

.container{
  text-align: center;
  border-radius: 2px;
  padding: 100px;
  box-sizing: border-box;
  font-size: 18px;
  width: 700px;
  left: 1%;
  top: 10%;
  position: absolute;
}
.container:hover{
  text-align: center;
  border-radius: 2px;
  padding: 100px;
  box-sizing: border-box;
  font-size: 18px;
  width: 700px;
  left: 1%;
  top: 10%;
  position: absolute;
}

.container1{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  padding: 50px;
  box-sizing: border-box;
  width: 410px;
  left: 60.5%;
  top: 9.5%;
  position: absolute;
  transition: 0.3s;

}
.container1:hover{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  padding: 50px;
  box-sizing: border-box;
  width: 410px;
  left: 60.5%;
  top: 9.5%;
  position: absolute;
}

.container2{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 2.5%;
  top: 100.4%;
  position: absolute;
  transition: 0.3s;
  font-size: 20px;
}

.container2:hover{
  text-align: center;
  border-radius: 2px;
  background-color: white;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 2.5%;
  top: 100.4%;
  position: absolute;
  box-shadow: 5px 5px 5px black;
  font-size: 20px;
}

.container3{
  text-align: center;
  border-radius: 2px;
  background-image: url("nurse.jpg");
  background-size: cover;
  padding: 230px;
  box-sizing: border-box;
  font-size: 18px;
  width: 1000px;
  left: 36.5%;
  top: 100%;
  position: absolute;
}
.container3:hover{
  text-align: center;
  border-radius: 2px;
  background-image: url("nurse.jpg");
  background-size: cover;
  padding: 230px;
  box-sizing: border-box;
  font-size: 18px;
  width: 1000px;
  left: 36.5%;
  top: 100%;
  position: absolute;
  transition: 0.3s;
  opacity: 0.5;
}

.container4{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 2.5%;
  top: 130.4%;
  position: absolute;
  transition: 0.3s;
  font-size: 30px;
}
.container4:hover{
  text-align: center;
  border-radius: 2px;
  background-color: white;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 2.5%;
  top: 130.4%;
  position: absolute;
  box-shadow: 5px 5px 5px black;
  font-size: 30px;
}

.container5{
  text-align: center;
  border-radius: 2px;
  background-image: url("https://cdn4.vectorstock.com/i/1000x1000/36/93/vaccination-child-cartoon-vector-15403693.jpg");
  background-size: cover;
  padding: 230px;
  box-sizing: border-box;
  font-size: 18px;
  width: 700px;
  left: 10.5%;
  top: 180%;
  position: absolute;
}
.container5:hover{
  text-align: center;
  border-radius: 2px;
  background-image: url("https://cdn4.vectorstock.com/i/1000x1000/36/93/vaccination-child-cartoon-vector-15403693.jpg");
  background-size: cover;
  padding: 230px;
  box-sizing: border-box;
  font-size: 18px;
  width: 700px;
  left: 10.5%;
  top: 180%;
  position: absolute;
  transition: 0.3s;
  opacity: 0.5;
}

.container6{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 60.5%;
  top: 180.4%;
  position: absolute;
  transition: 0.3s;
  font-size: 30px;
}
.container6:hover{
  text-align: center;
  border-radius: 2px;
  background-color: white;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 60.5%;
  top: 180.4%;
  position: absolute;
  box-shadow: 5px 5px 5px black;
  font-size: 30px;
}

.container7{
  text-align: center;
  border-radius: 2px;
  background-color: lightgreen;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 60.5%;
  top: 210.4%;
  position: absolute;
  transition: 0.3s;
  font-size: 30px;
}
.container7:hover{
  text-align: center;
  border-radius: 2px;
  background-color: white;
  background-size: cover;
  border: 1px solid black;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 60.5%;
  top: 210.4%;
  position: absolute;
  box-shadow: 5px 5px 5px black;
  font-size: 30px;
}

.container8{
  text-align: center;
  border-radius: 2px;
  padding: 50px;
  box-sizing: border-box;
  width: 500px;
  left: 5.5%;
  top: -5%;
  position: absolute;
  transition: 0.3s;
  font-size: 20px;
}

.big{
  text-align: center;
  border-radius: 2px;
  background-color: skyblue;
  padding: 100px;
  box-sizing: border-box;
  font-size: 18px;
  width: 1582.5px;
  height: 500px;
  top: 7.8%;
  position: absolute;
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

div.relative{
  left: 50px;
  top: 50px;
  font-size: 50px;
  color: white;
}

div.relative1{
  left: 80px;
  top: 80px;
  font-size: 60px;
  color: teal;
}

div.relative2{
  left: 80px;
  top: 80px;
  font-size: 60px;
  color: teal;
}

div.relative3{
  left: 80px;
  top: 110px;
  font-size: 25px;
  color: white;
}

[data-component="slideshow"] .slide {
	display: none;
  margin-top: -50px !important;
  width: -950px !important;
  transition: 0.5s;
}

[data-component="slideshow"] .slide:hover {
	display: none;
  margin-top: -50px !important;
  width: -950px !important;
  opacity: 0.5;
}

[data-component="slideshow"] .slide.active {
	display: block;
  float: right;
  margin-top: -50px !important;
  width: -950px !important;
}
</style>
</head>

  <body>

    <div class ="big">
      <div class="container">
        <div class="relative">
        <p> Welcome to the website! </p>
        </div>

        <div class="relative1">
        <p>Online Vaccination System </p>
        </div>

        <div class="relative2">
        <p> Sta. Crus II </p>
        </div>

        <div class="relative3">
        <p> Create an account to be part of the appointment. </p>
        </div>

        <div class="relative4">
        <p> ______________________________________________ </p>
        </div>
      </div>

      <div class="container8">
      <img src="inject.png" width="130" height="130">
      </div>
 
    <div id="slideshow-example" data-component="slideshow">
            <div role="list">
                <div class="slide">
                    <img src="help.jpg" width="600" height="400" alt="">
                </div>
                <div class="slide">
                    <img src="about.jpg"  width="600" height="400" alt="">
                </div>
                <div class="slide">
                    <img src="sched.jpg"  width="600" height="400" alt="">
                </div>
            </div>
    </div>
        
<script>        
var slideshows = document.querySelectorAll('[data-component="slideshow"]');
slideshows.forEach(initSlideShow);

function initSlideShow(slideshow) {

	var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

	var index = 0, time = 5000;
	slides[index].classList.add('active');

	setInterval( () => {
		slides[index].classList.remove('active');
		
		index++;
		if (index === slides.length) index = 0;

		slides[index].classList.add('active');

	}, time);
}
</script>
</div>
  
    <div class="container2">WELCOME TO THE ONLINE VACCINATION WEBSITE OF SANTA CRUS II, DASMARINAS CITY!!!</div>
    <div class="container3"></div>
    <div class="container4">Where we give you the best deals and treatments for you</div>
    <div class="container5"></div>
    <div class="container6">And your FAMILY</div>
    <div class="container7">So make an appointment and be healthy!</div>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

    <footer> All rights reserved 2021. </footer>

  </body>

</html>