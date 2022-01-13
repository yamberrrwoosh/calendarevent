<?php 
session_start();

	include("connect.php");
	include("functions1.php");

?>

<!DOCTYPE html>
<html>
<head>
  <ul class="navbar">
    <li class="profile">
      <a href="#" class="dropbtn">PROFILE</a>
        <div class="profile-content">
          <a href="adminprofile.php">PROFILE</a>
          <a href="adminschedule.php">SCHEDULE INPUT</a>
          <a href="adminhelp.php">CONTACT US</a>
          <a href="adminlogout.php">LOG OUT</a>
          <a href="adminarchive.php">ARCHIVE</a>
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
        
    <li><a href="adminviewschedules.php">SCHEDULE</a></li>

    <li class="home-button"><a href="adminhome.php">HOME</a></li>
    
    <ol class ="logo"><a href="#">Online Vaccination Scheduling System</a></ol>
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
  background-color:	black;
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
  color: white;
  text-align: right;
  padding: 10px 10px;
  text-decoration: none;
  border-left: 1px solid black;
}
  
li a:hover, .profile:hover .dropbtn{
  background-color: rgb(69, 71, 190);
  color: skyblue;
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

/*Search */
.search{
  float: left;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  cursor: pointer;
}

.searchbox{
  font-size: 20px;
  text-align: center;
}

.searchbutton{
  height: 28px;
  width: 100px;
  cursor: pointer;
  text-align: center;
  font-size: 20px;
  color: white;
  background-color: grey;
  text-decoration: none;
  font-family: sans-serif;
}
/*Search END*/

/*Table */


.container {
background-color:white;
display: inline-block;
margin: 20px;
width: 1000px;
overflow: auto;
border: 1px solid black;
font-family: arial;
float: right;
}

.container1{
  text-align: center;
  border-radius: 2px;
  background-image: url("clock.jpg");
  background-size: cover;
  border: 1px solid black;
  padding: 150px;
  box-sizing: border-box;
  font-size: 18px;
  width: 300px;
  height: 250px;
  left: 15.5%;
  top: 10%;
  position: absolute;
}
.container1:hover{
  text-align: center;
  border-radius: 2px;
  background-image: url("clock.jpg");
  background-size: cover;
  border: 1px solid black;
  padding: 150px;
  box-sizing: border-box;
  font-size: 18px;
  width: 300px;
  height: 250px;
  left: 15.5%;
  top: 10%;
  position: absolute;
  transition: 0.3s;
  opacity: 0.5;
}

.container2{
  text-align: center;
  border-radius: 2px;
  background-color: skyblue;
  background-size: cover;
  border: 1px solid black;
  padding: 25px;
  box-sizing: border-box;
  width: 302px;
  left: 15.5%;
  top: 50%;
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
  padding: 35px;
  box-sizing: border-box;
  width: 302px;
  left: 15.5%;
  top: 50%;
  position: absolute;
  box-shadow: 5px 5px 5px black; 
  font-size: 30px;
  box-shadow: 5px 5px 5px black;
}

.table {
height: 100px;
width: 2100px;
table-layout:fixed;
border-collapse: collapse;
}


th{
background-color: lightgreen;
}

td {
border: 1px solid black;
height: 50px;
width: 50px;
padding: 5px;
text-align: center;
}
/*Table END*/

footer{
  text-align: center;
  font-size: 20px;
  font-weight: bold;
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

#sidebar{
   position: absolute;
   width: 15%;
   height: 94%;
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

<script>

function myFunction() {
    window = confirm("Schedule has been removed.");
    if ((error == null) || (error == "")){
        text = "Okay.";
    }
    alert(text);
}
</script>

</head> 

  <body>

  <?php
    $mysqli = new mysqli('localhost','root','','login_sample_db') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM schedule") or die ($mysqli->error);
  ?>

<div id="sidebar">
          <ul>
            <ol><a href="adminhome.php">Go Back</a></ol>
            <ol><a href="adminhome.php">About Us</a></ol>
            <ol><a href="adminviewschedules.php">Appoint</a></ol>
            <ol><a href="adminhelp.php">FAQ</a></ol>
          </ul>
  </div>

  <div class="container">
    <table class = "table" border = "1">
      <thead>
        <tr class="header">
          <th>National ID</th>
          <th>Last Name</th> 
          <th>First Name</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Address</th>
          <th>Vaccine Type</th>
          <th>Time of Vaccination</th>
          <th>Day of Vaccination</th>
          <th>Payment</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>
 

    <?php
    while($row = $result->fetch_assoc()): 
  ?>

        <tr>
          <td><?php echo $row['national_id']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['firstname']; ?></td>
          <td><?php echo $row['age']; ?></td>
          <td><?php echo $row['sex']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['vaccine']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['day']; ?></td>
          <td><?php echo $row['payment']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td>
            <a href = "adminschedule.php?edit=<?php echo $row['id']; ?>"
            class = "btn btn-info"> Edit </a>
            <a href = "adminviewschedules.php?delete=<?php echo $row['id']; ?>"
            class = "btn btn-danger" onclick="myFunction()"> Delete </a>
          </td>

        </tr>

        
  <?php endwhile; ?>

    </table>
  </div> 	

  <div class = "container1"></div>
  <div class = "container2"> Week's Schedule </div>
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <footer> All rights reserved 2021. </footer>
  </body>
   
</html>