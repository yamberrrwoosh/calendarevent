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
            <ol><a href="adminhome.php">Home</ol>
            <ol><a href="adminhome.php">About Us</ol>
            <ol><a href="adminviewschedules.php">Schedule</ol>
            <ol><a href="adminschedule.php">Schedule Registration</ol>
            <ol><a href="adminhelp.php">FAQ</ol>
          </ul>
  </div>

  <ul class="navbar"> 
    <li class="profile">
      <a href="#" class="dropbtn">PROFILE</a>
        <div class="profile-content">
          <a href= "adminprofile.php">PROFILE</a>
          <a href="adminlogout.php">LOG OUT</a>
          <button onclick="myFunctions()" style= "background-color: white; 
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

    <div class="logo1"><a href="adminhome.php"><img src="logo.png"width="45" height="45"></a></div>
  </ul>

<style>
  *{
  border: 0;
  padding: 0;
  margin: 0;
  outline: 0;
}

body{
  background-image: url("https://newsroom.cisco.com/documents/10157/14740/healthcare-iot-feature_1200x675_hero_052219_animated.gif/5c837051-593f-4d57-b67c-bc75f2e6fb5d?t=1558459688144");
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

table{
  width:60%;
  height: 15%;
  position: absolute;
  margin: auto;
  top : 10%;
  left: 17%;
}

table, th, td{
  border: 1px solid black;
  border-collapse: collapse;
}

.header, th{
  background-color: grey;
  color: white;
  text-align: center;
  padding: 15px;
  margin: 100%;
  font-family:Verdana   ;
  font-size: large;
}

tr{
  background-color: white;
  color: black;
  font-family: Arial;
  font-size: 20px;
  text-align: center;
}

.container{
  text-align: center;
  border-radius: 2px;
  background-image: url("fbuser1.png");
  background-size: cover;
  padding: 220px;
  box-sizing: border-box;
  width: 539px;
  left: 60%;
  top: 10%;
  position: absolute;
  font-family: arial;
}

.container1{
  text-align: center;
  border-radius: 2px;
  background-color: skyblue;
  background-size: cover;
  border: 1px solid black;
  padding: 25px;
  box-sizing: border-box;
  width: 500px;
  left: 61.5%;
  top: 65%;
  position: absolute;
  transition: 0.3s;
  font-size: 20px;
}
.container1:hover{
  text-align: center;
  border-radius: 2px;
  background-color: white;
  background-size: cover;
  border: 1px solid black;
  padding: 35px;
  box-sizing: border-box;
  width: 500px;
  left: 61.5%;
  top: 65%;
  position: absolute;
  box-shadow: 5px 5px 5px black; 
  font-size: 30px;
  color: black;
}

.btn.btn-info{
  background-color: green;
  color: white;
  padding: 13px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn.btn-danger{
  background-color: red;
  color: white;
  padding: 13px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

#sidebar{
   position: absolute;
   width: 15%;
   height: 130.0%;
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
function myFunctions() {
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

<script>

function myFunction() {
    window = confirm("Your account has been terminated.");
    if ((error == null) || (error == "")){
        text = "Okay.";
    }
    alert(text);
}
</script>

</head>
  

  <body>

  <?php
    $currentUser = $_SESSION['admin_id'];
    $mysqli = new mysqli('localhost','root','','login_sample_db') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM admins where admin_id = '$currentUser'") or die ($mysqli->error);
  ?>

    <table class = "table" border = "1">
      <thead>
        <tr>
          <th> Settings </th>   
          <th> Username </th>
        </tr>
      </thead>

  <?php
    while($row = $result->fetch_assoc()): 
  ?>

        <tr>
          <td>
            <a href = "adminsettings.php?edit=<?php echo $row['id']; ?>"
            class = "btn btn-info"> Edit </a>
            <a href = "adminlogin.php?delete=<?php echo $row['id']; ?>"
            class = "btn btn-danger" onclick="myFunction()"> Delete </a>
          </td>
          <td><?php echo $row['uname']; ?></td>
 
        </tr>

  <?php endwhile; ?>

    </table>

  <div class = "container"></div>
  <div class = "container1"> Manipulate your account. </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
    <footer> All rights reserved 2021. </footer>

    </body>
</html>