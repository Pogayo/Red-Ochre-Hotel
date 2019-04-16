<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Radiant-contact</title>

    <link href="../CSS/shop.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div class="width-full" style="height:350px">
    <img src="../images/suite-bedroom.jpg" alt="bed" class="full-width-height-image"/>
</div>
<h1 class="center-text">Welcome</h1><br>
<div  class="width-full"><!--Contains the sign-up form-->
    <form action="login.php" method="post" class="width-full flex flex-column flex-column-center-all">

        <input type="email" name="email" placeholder="Email" class="log-sign-input"><br/>


        <input type="Password" name="pass" placeholder="Password" class="log-sign-input"><br/><br>


        <button  type="submit" class="black-button-orange-text log-sign-input"><b>Login</b></button><br>
    </form>
</div>
<div class="width-full"><!--contains already have account to redirect-->
    <p class="center-text">Don't have an account? <a href="signup-front.php">Sign up here</a></p>
    <?php include 'footer.php';?>
</div>
</body>

</html>
