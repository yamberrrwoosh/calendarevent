<?php 
session_start();

	include("connections.php");
	include("functions1.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$uname = $_POST['uname'];
		$pword = $_POST['pword'];

		if(!empty($uname) && !is_numeric($uname) && !empty($pword))
		{

			
			$admin_id = random_num(20);
			$query = "insert into admins (admin_id,uname,pword)
		   			  values ('$admin_id','$uname','$pword')";

			mysqli_query($con, $query);

			header("Location: adminlogin.php");
			die;
		}else
		{
			echo "<script>alert('Please enter valid information.')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <ul class="navbar">
    <li><a href="adminlogin.php">LOGIN</a></li>
    <li><a href="adminsignup.php">SIGN UP</a></li>
            
    <li class="home-button"><a href="outhome.php">HOME</a></li>

    <ol class ="logo"><a href="#">Sta. Crus II Online Vaccination Scheduling System</a></ol>
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
.navbar {
  list-style-type: none;
  margin: 0;
  padding: 5px 20px;
  overflow: hidden;
  background-color: rgba(255, 255, 255, .15);
  backdrop-filter: blur(5px);
  font-size: 25px;
  font-weight: bold;
  box-shadow: 3px 3px 3px white;
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
   
li {
  float: right;
  font-family:Helvetica;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: right;
  padding: 10px 10px;
  text-decoration: none;
  border-left: 1px solid black;
}
  
li a:hover, .profile:hover .dropbtn {
  background-color: rgb(69, 71, 190);
  color: white;
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
  font-size: 15px;
  font-weight: bold;
}
  
.profile-content a {
  color: black;
  padding: 20px 20px;
  text-decoration: none;
  display: block;
  text-align: left;
}
  
.profile-content a:hover {
  background-color: black;
  color: white;
}
  
.profile:hover .profile-content {
  display: block;
}
  /*Navigation Bar END*/

.signup{
  text-align: center;
  font-weight: bold;
}
  
input[type=text],[type=password], select, textarea {
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
  
button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
  
button[type=submit]:hover {
  background-color: #45a049;
}
  
.login{
  background-color: #9faa04;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}
  
.login:hover {
  background-color: #a09745;
}
  
.container{
  text-align: center;
  border-radius: 5px;
  padding: 20px;
  border: thin solid black;
  box-sizing: border-box;
  width: 400px;
  left: 35%;
  position: absolute;
  font-family: arial;
  top: 20%;
  background-color: rgba(255, 255, 255, .15);
  backdrop-filter: blur(5px);
}
</style>
</head>

  <body>
    <div class="container">
      <form method="post">
	    <img src="https://c.tenor.com/pSkzLUayMVEAAAAj/ekruut-sign-up.gif" style="width:30%;">
        <br>
        <br>
    
        <label for="Username">𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞</label>
        <input type="text" id="uname" name="uname" placeholder="Username:">
        <br>

        <label for="Password">𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝</label>
        <input type="password" id="password" name="pword" placeholder="Password:">          
        <br>

        <button type="submit">SIGN UP</button>
        <br>
        <br>

        <a href="adminlogin.php" class="login">LOGIN INSTEAD</a>
        <br>
        <br>
        <br>

        <a href="adminusersignup.php" style="color: black;">Want to create a User Account?</a>

      </form>
    </div>
  </body>
    
</html>