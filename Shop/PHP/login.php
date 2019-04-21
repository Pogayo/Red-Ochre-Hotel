<?php
$host="localhost";
$user="root";
$password="";
$db="hotel";
 
mysqli_connect($host,$user,$password);
mysqli_select_db($db,"test");
 
if(isset($_POST['username'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
    $sql="select * from login where email='".$email."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}

?>