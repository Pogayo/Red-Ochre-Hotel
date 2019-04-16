<?php
include_once('dbconnect.php');

$uname=$_POST['uname'];
$email=$_POST['email'];
$utype=$_POST['utype'];
$pass=$_POST['pass'];
echo $uname;

$sql="insert into users(uname,email,password,UserType) values('$uname','$email','$pass','$utype')";
$result=$conn->query($sql);

header("location:signupsuccess.php");

?>''