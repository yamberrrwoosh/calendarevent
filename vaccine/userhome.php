<?php 
session_start();

	include("connection.php");
	include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>

  <div id="sidebar">
          <ul>
            <ol><a href="userhome.php">Home</ol>
            <ol><a href="userhome.php">About Us</ol>
            <ol><a href="viewschedules.php">Schedule</ol>
            <ol><a href="schedule.php">Schedule Registration</ol>
            <ol><a href="userhelp.php">FAQ</ol>
          </ul>
  </div>

  <ul class="navbar">         
    <li class="profile">
      <a href="#" class="dropbtn">PROFILE</a>
        <div class="profile-content">
          <a href="userprofile.php">PROFILE</a>
          <a href="logout.php">LOG OUT</a>
          <button onclick="myFunction()" style= "background-color: white; 
                        font-size: 16px;
                     	border: none;
                        outline: none;
  	                    color: #000;
                        background-color: grey;
  	                    padding: 14px 16px; 	                    
  	                    font-family: sans-serif;
 	                    margin: 0;">Tap for any concern.</button>
        </div>
      </li>

      <div class="logo1"><a href="userhome.php"><img src="logo.png"width="45" height="45"></a></div>

      <!-- CSS only -->

  </ul>
<style>
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

/*Navigation Bar */
.navbar{
  list-style-type: none;
  margin: 0;
  padding: 5px 20px;
  overflow: hidden;
  background-color: #FFFAFA;
  font-size: 25px;
  font-weight: bold;
  box-shadow: 3px 3px 3px white;
}

.logo1 {
  float: right;
}
  
ol{
  font-size: 25px;
  font-family:Helvetica;
  padding: 10px 10px;
  text-align: left;
  color: white;
}

ol :hover{
  color: skyblue;
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
  color: black;
  text-align: right;
  padding: 10px 10px;
  text-decoration: none;

}
  
li a:hover, .profile:hover .dropbtn {
  background-color: rgb(69, 71, 190);
  color: skyblue;
  transition: 0.4s;
}
  
li.profile {
  display: inline-block;
}
  
.profile-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 14.6px;
  font-weight: bold;
}
  
.profile-content a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
  text-align: left;
}
  
.profile-content a:hover {
  background-color: black;
  color: white;
  transition: 0.4s;
}
  
.profile:hover .profile-content {
  display: block;
}

.container1{
  text-align: center;
  border-radius: 5px;
  padding: 15px;
  border: thin solid black;
  box-sizing: border-box;
  width: 1230px;
  left: 20%;
  top: 10%;
  position: absolute;
  font-family: arial;
  background-color: rgba(255, 255, 255, .15);
  backdrop-filter: blur(5px);
}

.gallery{
	margin:13.5px;
	border:1px solid #ccc;
	float:left;
	width:370px;
  border: thin solid black;
}

.gallery img{
	width:100%;
	height:auto;
}

.gallery1{
	margin:13.5px;
	border:1px solid #ccc;
	float:left;
	width:370px;
  border: thin solid black;
}

.gallery1 img{
	width:100%;
	height:193px;
}

.gallery2{
	margin:13.5px;
	border:1px solid #ccc;
	float:left;
	width:370px;
  border: thin solid black;
}

.gallery2 img{
	width:100%;
	height:230px;
}

.d{
	padding:15px;
	text-align:center;
	background-color:#FFE5B4;]
}

.d:hover {
    background-color:skyblue;
    transition: 0.4s;
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}
/*Navigation Bar END*/


#sidebar{
   position: absolute;
   width: 15%;
   height: 109.3%;
   left: 0;
   background-color: black;
}

#sidebar ol{
   color: white;
   font-size: 20px;
   padding: 30px;
   text-align: center;
}

#sidebar ol:hover{
   color: gray;
   font-size: 20px;
   padding: 30px;
   text-align: center;
   transition: all ease-in-out 250ms;
   cursor: pointer;
}

.toggle-btn{
   position: absolute;
   Left: 105%;
   top: 15px;
}

.toggle-btn span{
   display: block;
   background-color: black;
   width: 30px;
   height: 5px;
   margin: 3px;
}
</style>

<script>
function myFunction() {
    error = prompt("Please stare error in the page");
    if ((error == null) || (error == "")){
        text = "Thank you!";
    }
    else{
      text = "Alright, Thank you!";
    }
    alert(text);
}
</script>

</head>
    
  <body>
  
    <div class = "container1">
		
    <div class = "gallery">
      <img src = "hospital.jpg">
        <a style = "text-decoration:none; color:black;"  href = "userhome.php"><div class = "d"> Home Interface </a></div>					
    </div>
    
    <div class = "gallery2">
      <img src = "help.jpg">
        <a style = "text-decoration:none; color:black;"  href = "userhelp.php"><div class = "d"> Help Interface </a></div>
    </div>
    
    <div class = "gallery">
      <img src = "sched.jpg">
        <a style = "text-decoration:none; color:black;"  href = "viewschedules.php"><div class = "d"> Schedule Interface </a></div>
    </div>

    <div class = "gallery">
      <img src = "profile.jpg">
        <a style = "text-decoration:none; color:black;"  href = "userprofile.php"><div class = "d"> Profile Interface </a></div>
    </div>

    
    <div class = "gallery">
      <img src = "register.jpeg">
        <a style = "text-decoration:none; color:black;"  href = "schedule.php"><div class = "d"> Registration Interface </a></div>
    </div>

    <div class = "gallery1">
      <img src = "about.jpg">
        <a style = "text-decoration:none; color:black;"  href = "userprofile.php"><div class = "d"> About Interface </a></div>
    </div>

    
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
    <footer> All rights reserved 2021. </footer>
   
  </body>
 
</html>