<?php
session_start();
include 'dbconnect.php';
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";

$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()){
    header("Location:error.php");

}else{
    //$_SESSION['name']=$_POST['uname'];
    $sql="SELECT uname FROM users WHERE email='$email' AND password='$pass'";

    $result=$conn->query($sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['name']=$row['uname'];

    //$sess  = $_SESSION['name'];
    //echo $sess;
    header("Location:home.php");
}
