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
/*Navigation Bar END*/

/*Accordion */
.accordion{
  background-color: rgb(216, 216, 216);
  color: rgb(0, 0, 0);
  cursor: pointer;
  padding: 10px;
  width: 90%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover{
  background-color: rgb(154, 199, 230); 
  font-weight:bolder;
}

.panel{
  padding: 0 18px;
  display: none;
  overflow: hidden;
  font-family: Arial;
  background-color: rgb(255, 255, 255);
  color: black;
}
/*Accordion END*/

.back{
  padding: 10px;
  font-size: 15px;
  border: 1px;
  border-radius: 10px;
  background: white;
  opacity: 100%;
  height: 100%;
  text-align: center;
}

.back:hover{
  opacity: 99%;
}

.faq{
  font-size: 20px;
  text-align: center;
  font-family: Arial;
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

#sidebar{
   position: absolute;
   width: 15%;
   height: 116%;
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
   color: white;
   font-size: 20px;
   padding: 30px;
   text-align: center;
   transition: all ease-in-out 250ms;
   cursor: pointer;
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
    
    <div class="back">
      <p class="faq">HERE ARE QUESTIONS WE ARE IMMEDIATELY READY TO GIVE YOU ANSWERS FOR</p>
      <button class="accordion">WHAT SHOULD I DO TO UPDATE MY PROFILE'S INFORMATION AND CHANGE PASSWORD</button>
        <div class="panel">
          <p class="answer">TO EDIT YOUR INFORMATION, HOVER YOUR MOUSE ON PROFILE ON NAVIGATION BAR THEN CLICK SETTINGS, THERE YOU CAN EDIT YOUR DATA AND CHANGE YOUR PASSWORD</p>
        </div>

      <button class="accordion">WHAT SHOULD I DO TO SEE MY SCHEDULE ON RECORD SECTION?</button>
        <div class="panel">
          <p class="answer">TO SEE YOUR SCHEDULE, CLICK THE RECORD ON NAVIGATION BAR THEN SEARCH YOUR NATIONAL ID NUMBER ON SEARCHBAR THEN CLICK SEARCH BUTTON</p>
        </div>

      <button class="accordion">HOW WILL I ABLE TO SEE MY ACCOUNT INFORMATION IN THE SYSTEM?</button>
        <div class="panel">
          <p class="answer">KINDLY GO TO THE UPPER RIGHT CORNER OF THE INTERFACE AND HOVER THE PROFILE TAB. UNDER THAT, YOU WILL BE ABLE TO CLICK THE PROFILE INTERFACE.</p>
        </div>
      <button class="accordion">CAN I EDIT THE INFORMATION ON RECORD PAGE? WHAT SHOULD I DO WHEN THERE IS INCORRECT INFORMATION RECORDED IN THE TABLE OF RECORD PAGE?</button>
        <div class="panel">
          <p class="answer">YOU CANNOT EDIT THE INFORMATION ON RECORD SECTION, YOU CAN CONTACT THE ADMINISTRATOR OF THIS WEBPAGE BY CLICKING THEIR NAME BELOW SO THAT YOUR INFORMATION WILL BE UPDATED</p>
        </div>
      <button class="accordion">HOW CAN WE CONTACT YOUR ADMIN FOR SCHEDULE CHANGE OR DELETION?</button>
        <div class="panel">
          <p class="answer">YOU WILL BE ABLE TO CONTACT US IF YOU ARE CONCERNED WITH YOUR SCHEDULE THROUGH OUR NUMBER GIVEN: 900-922-807</p>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
        });
        }
    </script> 

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

    <footer> All rights reserved 2021. </footer>

    </body>
    
</html>