<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  if(isset($_POST['Change']))
  {
    $id_num = $_SESSION['user_id'];
    $op = $_POST['op'];
    $np = $_POST['np'];
    $c_np = $_POST['c_np'];

    $query = mysqli_query($con,"SELECT password FROM client
    WHERE user_id = '$id_num' AND password ='$op'");
    $num = mysqli_fetch_array($query);

    if($num>0)
    {
      $sql = mysqli_query($con,"UPDATE client SET password ='$np' WHERE user_id = '$id_num'");
      header("Location: usersettings.php");
			die;
    }
    else
    {
      echo "<p style = 'color: red;' align='center'> <font size='6pt'>Please enter valid information.</font> </p>";
    }
  }
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


.cancel{
  background-color: red;
  color: rgb(255, 255, 255);
  padding: 13px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.cancel:hover{
  background-color: #cd5c5c;
  transition: 0.3s;
}

button[type=submit]{
  background-color: green;
  color: white;
  padding: 13px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover{
  background-color: #45a049;
  transition: 0.3s;
}

.container{
  text-align: center;
  border-radius: 5px;
  padding: 20px;
  box-sizing: border-box;
  border: thin solid black;
  width: 30%;
  left: 35%;
  top: 20%;
  position: absolute;
  font-family: arial;
  background-color: rgba(255, 255, 255, .15);
  backdrop-filter: blur(5px);
}

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

input[type=text],[type=password], select, textarea{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=text],[type=password], select, textarea :hover{
  border-color:rgb(0, 0, 0);
  box-shadow:0 0 8px 0 rgb(0, 0, 0);
  height: 40px;
  width: 60%;
}

#sidebar{
   position: absolute;
   width: 15%;
   height: 120.5%;
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

      <div class="container">
      <form method="post">
      <img src="https://media2.giphy.com/media/WUyeycaNusqDWv7KUz/giphy.gif?cid=6c09b9523c8491c796db8eb4a5354f50721bd859c8cc4124&rid=giphy.gif&ct=s" style="width:30%;">
        <br>
              
        <input type="password" id="password" name="op" placeholder="Enter Old Password">
        <br>
        <br>

        <input type="password" id="password" name="np" placeholder="Enter New Password">
        <br>
        <br>

        <input type="password" id="password" name="c_np" placeholder="Re-enter New Password">
        <br>
        <br>
<!-- gagamit tayo if sa old password, if password == password then true -->
<!-- dito gagamit tayo logical AND para sa new password, if new password == re enter new password magiging TRUE then change password na -->
    
        <button type="submit" name="Change">Save</button><br><br>
        <a href="usersettings.php" class="cancel">Cancel</a>
      </form>
      </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

    <footer> All rights reserved 2021. </footer>

    </body>
</html>


