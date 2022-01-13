<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}

$mysqli = new mysqli('localhost','root','','login_sample_db') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$national_id = '';
$lastname = '';
$firstname = '';
$age = '';
$sex = '';
$address = '';
$vaccine = '';
$time= '';
$day = '';
$payment = '';
$price = '';



if(isset($_POST['save'])){
    $national_id = $_POST['national_id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    $sex= $_POST['sex'];
    $address= $_POST['address'];
    $vaccine = $_POST['vaccine'];
    $month = $_POST['month'];
    $day= $_POST['day'];
    $time = $_POST['time'];

    if(!empty($national_id) && !empty($lastname) && !empty($firstname) && !empty($age) && is_numeric($age) && !empty($sex) && !empty($address) && !empty($vaccine) && !empty($time) && !empty($day))
    
    $mysqli->query("INSERT INTO schedule (national_id, lastname, firstname, age, sex, address, vaccine,
    month, day, time) VALUES ('$national_id', '$lastname',
    '$firstname', '$age', '$sex','$address', '$vaccine', '$month', '$day', '$time')") 
    or die ($mysqli->error);
    
    header("location: schedule.php");  
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM schedule WHERE id=$id") or die ($mysqli->error());

    header("location: adminviewschedules.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM schedule WHERE id=$id") or die ($mysqli->error());

    if (!empty($result)){
        $row = $result->fetch_array();

        $national_id = $row['national_id'];
        $lastname = $row['lastname'];
        $firstname = $row['firstname'];
        $age = $row['age'];
        $sex = $row['sex'];
        $address = $row['address'];
        $vaccine = $row['vaccine'];
        $month = $row['month'];
        $day = $row['day'];
        $time = $row['time'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $national_id = $_POST['national_id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    $sex= $_POST['sex'];
    $address= $_POST['address'];
    $vaccine = $_POST['vaccine'];
    $month = $_POST['month'];
    $vaccine = $_POST['day'];
    $time = $_POST['time'];
  
    $result = $mysqli->query("UPDATE schedule SET national_id ='$national_id', lastname ='$lastname', 
    firstname = '$firstname', age = '$age', sex = '$sex', address = '$address', vaccine = '$vaccine',
    month = '$month', day = '$day', time = '$time' WHERE id=$id")
    or die ($mysqli->error);

    header("location: adminviewschedules.php");
}