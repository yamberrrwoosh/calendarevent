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
$uname = '';



if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM admins WHERE id=$id") or die ($mysqli->error());

    header("location: adminlogin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM admins WHERE id=$id") or die ($mysqli->error());

    if (!empty($result)){
        $row = $result->fetch_array();
        $uname = $row['uname'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $uname = $_POST['uname'];
   

    $result = $mysqli->query("UPDATE admins SET uname ='$uname' WHERE id=$id")
    or die ($mysqli->error);

    header("location: adminsettings.php");
}


