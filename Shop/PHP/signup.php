<?php
include_once 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$f=$_POST["fname"];
$l=$_POST["lname"];
$q=$_POST["email"];
$qu=$_POST["utype"];
$s=$_POST["pass"];	


}

$insert="insert into user(f_name, l_name	, usertype	, email, password)
values('$f', '$l','$q','$qu','$s')";
$insert1="insert into login( email, password)
values('$q','$s')";
if (mysqli_query($mysqli , $insert1)) {
echo "New record created successfully";
if($insert1==true){
echo "Data are inserted well";
}
}

else {
echo "Error: " . $insert1 . "<br>" . mysqli_error($mysqli );
}
if (mysqli_query($mysqli , $insert)) {
echo "New record created successfully";
if($insert=true){
echo "Data are inserted well";
}
}

else {
echo "Error: " . $insert . "<br>" . mysqli_error($mysqli );
}
mysqli_close($mysqli );


?>
