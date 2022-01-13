<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_Login($con);
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
  transition: 0.4s;
}

button[type="reset"]:hover{
  background-color: #811300;
  transition: 0.4s;
}

.change{
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.change:hover{
    background-color: gray;
    transition: 0.4s;
  }

.cancel{
  background-color: red;
  color: rgb(255, 255, 255);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.cancel:hover{
  background-color: #cd5c5c;
  transition: 0.4s;
  }

.add{
  background-color: orange;
  color: rgb(255, 255, 255);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.add:hover{
  background-color: #ff6347;
  transition: 0.4s;
}

.container{
  text-align: center;
  border-radius: 5px;
  padding: 20px;
  border: thin solid black;
  box-sizing: border-box;
  width: 600px;
  left: 30%;
  top: 12%;
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

#sidebar{
   position: absolute;
   width: 15%;
   height: 112.4%;
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
    window = confirm("Your account will be logged out.");
    if ((error == null) || (error == "")){
        text = "Okay.";
    }
    alert(text);
}
</script>

</head>

  <body>

  <div id="sidebar">
          <ul>
            <ol><a href="userhome.php">Go Back</a></ol>
            <ol><a href="userhome.php">About Us</a></ol>
            <ol><a href="viewschedules.php">Appoint</a></ol>
            <ol><a href="userhelp.php">FAQ</a></ol>
          </ul>
    </div>

    <div class="container">
    <?php require_once 'connection.php'; ?>
      <form action = "connection.php" method = "POST">

      <img src="https://media2.giphy.com/media/WUyeycaNusqDWv7KUz/giphy.gif?cid=6c09b9523c8491c796db8eb4a5354f50721bd859c8cc4124&rid=giphy.gif&ct=s" style="width:30%;">
        <br>

        <input type = "hidden" name = "id" value = "<?php echo $id ?> "> 

        <label> 𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 </label>
        <input type = "text" name = "user_name" class = "form-control"
              value = "<?php echo $user_name; ?>" placeholder = "Update username">
              
        <label> 𝐍𝐚𝐦𝐞 </label>
        <input type = "text" name = "fullname" class = "form-control"
              value = "<?php echo $fullname; ?>" placeholder = "Update name">
              
        <label> 𝐀𝐝𝐝𝐫𝐞𝐬𝐬 </label>
        <input type = "text" name = "address" class = "form-control"
              value = "<?php echo $address; ?>" placeholder = "Update address">
              
        <label> 𝐂𝐨𝐧𝐭𝐚𝐜𝐭 </label>
        <input type = "text" name = "contact_no" class = "form-control"
              value = "<?php echo $contact_no; ?>" placeholder = "Update contact number">
            
        <label> 𝐀𝐠𝐞 </label>
        <input type = "text" name = "age" class = "form-control"
              value = "<?php echo $age; ?>" placeholder = "Update age">

        <button type = "submit" name = "update"> Save </button>        
        <a href="usersignup.php" class="add" onclick="myFunction()">Add Account</a>
        
        <a href="userchangepass.php" class="change">Change Password</a>
        <a href="userprofile.php" class="cancel">Back</a>

      </form>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

    <footer> All rights reserved 2021. </footer>

  </body>
    
</html>