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
$fullname = '';
$password = '';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM client WHERE id=$id") or die ($mysqli->error());

    header("location: userlogin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM client WHERE id=$id") or die ($mysqli->error());

    if (!empty($result)){
        $row = $result->fetch_array();
        $fullname = $row['fullname'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];

    $result = $mysqli->query("UPDATE client SET fullname ='$fullname' WHERE id=$id")
    or die ($mysqli->error);

    header("location: usersettings.php");
}



