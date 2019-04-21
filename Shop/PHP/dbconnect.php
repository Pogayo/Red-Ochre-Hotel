<?php
$mysqli = new mysqli("localhost", "root", "", "hotel");

/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
?>