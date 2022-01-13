<?php 
session_start();

	include("connect.php");
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
  background-size: 100%;
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

.update{
  font-weight: bold;
}

input[type=text],[type=password], select, textare{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

p{
  background-color: white;
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button[type=submit]{
  background-color: green;
  color: white;
  padding: 13px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 15px;
}

button[type=submit]:hover{
  background-color: #45a049;
  transition: 0.4s;
}

button[type="reset"]:hover{
  background-color: #811300;
}

button[type=button]{
  background-color: black;
  color: white;
  padding: 13px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 15px;
}

.change{
  background-color: #9faa04;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none;
}

.change:hover{
    background-color: #a09745;
  }

.cancel{
  background-color: red;
  color: rgb(255, 255, 255);
  padding: 13px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none;
}

.cancel:hover{
  background-color: #cd5c5c;
  transition: 0.4s;
}

.add{
  background-color: red;
  color: rgb(255, 255, 255);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.add:hover{
  background-color: orange;
}

.container{
  text-align: center;
  border-radius: 5px;
  padding: 15px;
  border: thin solid black;
  box-sizing: border-box;
  width: 500px;
  left: 20%;
  top: 10%;
  position: absolute;
  font-family: arial;
  background-color: rgba(255, 255, 255, .15);
  backdrop-filter: blur(5px);
}

.table {
height: 50px;
width: 150px;
border-collapse: collapse;
background-color:white;
}

.table:hover {
height: 50px;
width: 150px;
border-collapse: collapse;
background-color:lightgreen;
transition: 0.5s;
}


td {
border: 1px solid black;
height: 50px;
width: 50px;
padding: 0px;
text-align: center;
font-size: 20px;
}

th {
border: 1px solid black;
height: 50px;
width: 50px;
padding: 0px;
text-align: center;
font-size: 25px;
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

.big{
  text-align: center;
  border-radius: 2px;
  background-color: gray;
  border: thin solid black;
  padding: 100px;
  box-sizing: border-box;
  font-size: 18px;
  width: 500px;
  height: 1000px;
  top: 10%;
  left: 60%;
  position: absolute;
  border-radius: 5px;
}

#sidebar{
   position: absolute;
   width: 15%;
   height: 147%;
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

.contain{
  text-align: center;
  border-radius: 2px;
  padding: 100px;
  box-sizing: border-box;
  font-size: 18px;
  width: 100px;
  left: 87%;
  top: 10%;
  position: absolute;
}

.contain1{
  text-align: center;
  border-radius: 2px;
  box-sizing: border-box;
  font-size: 18px;
  width: 152px;
  left: 60%;
  top: 80%;
  position: absolute;
  border: thin solid black;
  background-color: gray;
}

.contain2{
  text-align: center;
  border-radius: 2px;
  box-sizing: border-box;
  font-size: 18px;
  width: 152px;
  left: 78%;
  top: 80%;
  position: absolute;
  border: thin solid black;
  background-color: gray;
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

  <div class = "contain">
  <div id="slideshow-example" data-component="slideshow">
            <div role="list">
                <div class="slide">
                    <img src="https://www.baltimoresun.com/resizer/TtwJt7UtybHvugCPtp6yJ_2XYFU=/1200x0/top/cloudfront-us-east-1.images.arcpublishing.com/tronc/IQ6DHYDO6VEQPIHVUDOXB45VYU.jpg" width="600" height="400" alt="">
                </div>
                <div class="slide">
                    <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1500w,f_auto,q_auto:best/rockcms/2021-08/210805-farm-worker-cartoon-se-114p-a95750.jpg"  width="600" height="400" alt="">
                </div>
                <div class="slide">
                    <img src="https://oceanecology.ca/wp/wp-content/uploads/2021/03/tc-109326-web-raeside-vaccine-web2-jpg.jpg"  width="600" height="400" alt="">
                </div>
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

    <div class="container">
    <?php require_once 'connect.php'; ?>
    
      <form action = "connect.php" method = "POST">
        <label class="update">𝙑𝙖𝙘𝙘𝙞𝙣𝙖𝙩𝙞𝙤𝙣 𝘼𝙥𝙥𝙤𝙞𝙣𝙩𝙢𝙚𝙣𝙩 𝙍𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙩𝙞𝙤𝙣</label>
        <br>
        <br>

        <input type = "hidden" name = "id" value = "<?php echo $id ?> "> 

       
        <input type = "text" name = "national_id" class = "form-control"
              value = "<?php echo $national_id; ?>" placeholder = "Enter National ID:">

        
        <input type = "text" name = "lastname" class = "form-control"
              value = "<?php echo $lastname; ?>" placeholder = "Enter Surname:">
              
       
        <input type = "text" name = "firstname" class = "form-control"
              value = "<?php echo $firstname; ?>" placeholder = "Enter Firstname:">
              
      
        <input type = "number" name = "age" class = "form-control"
              value = "<?php echo $age; ?>" placeholder = "Enter Age:">           
        
        
        <input type = "text" name = "address" class = "form-control"
              value = "<?php echo $address; ?>" placeholder = "Enter Addresss:">  
       

        <select name = "sex">
        <option value = "select"> Select Gender </option>
          <option value = "Male"> Male </option>
          <option value = "Female"> Female </option>
          <option value = "Other"> Other </option>
        </select>


        <select name = "vaccine">
        <option value = "select"> Select a Vaccine </option>
          <option value = "Pfizer"> Pfizer </option>
          <option value = "AstraZeneca"> AstraZeneca </option>
          <option value = "Moderna"> Moderna</option>
          <option value = "Adjuvenated"> Adjuvenated </option>
          <option value = "FluShot"> Flu Shot </option>
          <option value = "CellBased"> Cell Based </option>
          <option value = "Recombinant"> Recombinant </option>
          <option value = "HighDosed"> High Dosed </option>
          <option value = "PCV13"> PCV13 </option>
          <option value = "PPSV23"> PPSV23 </option>
        </select>


        <select name = "month">
        <option value = "January"> January </option>
          <option value = "Febuary"> February </option>
          <option value = "March"> March </option>
          <option value = "April"> April </option>
          <option value = "May"> May </option>
          <option value = "June"> June </option>
          <option value = "July"> July </option>
          <option value = "August"> August </option>
          <option value = "September"> September </option>
          <option value = "October"> October </option>
          <option value = "November"> November </option>
          <option value = "December"> December </option>
        </select>


        <select name = "day">
        <option value = "1"> 1 </option>
          <option value = "2"> 2</option>
          <option value = "3"> 3 </option>
          <option value = "4"> 4 </option>
          <option value = "5"> 5 </option>
          <option value = "6"> 6 </option>
          <option value = "7"> 7 </option>
          <option value = "8"> 8 </option>
          <option value = "9"> 9 </option>
          <option value = "10"> 10 </option>
          <option value = "11"> 11 </option>
          <option value = "12"> 12 </option>
          <option value = "13"> 13 </option>
          <option value = "14"> 14 </option>
          <option value = "15"> 15 </option>
          <option value = "16"> 16 </option>
          <option value = "17"> 17 </option>
          <option value = "18"> 18 </option>
          <option value = "19"> 19 </option>
          <option value = "20"> 20 </option>
        </select>

        
        <select name = "time">
        <option value = "select"> Select a Time </option>
          <option value = "9:00am"> 9:00am </option>
          <option value = "11:00am"> 11:00am </option>
          <option value = "1:00pm"> 1:00pm </option>
          <option value = "3:00pm"> 3:00pm </option>
        </select>
     

        <?php
        if($update == true):
        ?>
        <button type = "submit"  class = "btn btn-info" name = "update"> Update </button>        
        <?php else: ?>

        <button type = "submit" class = "btn btn-primary" name = "save"> Save </button>
        <?php endif; ?>       

        <a href="userhome.php" class="cancel">Cancel</a>

      </form>
      
    </div> 

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 

    <footer> All rights reserved 2021. </footer>
  </body>
    
</html>