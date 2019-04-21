<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Radiant-contact</title>

        <link href="../CSS/shop.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
    <center>
<div class="width-full" >
    <a href="index.php"><img style="padding-top: 40px; height: 300px; width: 300px;" src="../images/shop.png" alt="bed" class="full-width-height-image"/></a>
</div>
</center>
    <h1 class="center-text">Welcome</h1><br>
    <div  class="width-full"><!--Contains the sign-up form-->
    <form action="signup.php" method="POST" class="width-full flex flex-column flex-column-center-all">
        <input type="text" name="fname" placeholder="first Name" class="log-sign-input"><br/>
        <input type="text" name="lname" placeholder="last Name" class="log-sign-input"><br/>
        <select class="log-sign-input" name="utype">
            <option>You are a Seller</option>
            <option>You are a Buyer</option>

        </select><br/>
        <input type="email" name="email" placeholder="Email" class="log-sign-input"><br/>
        <input type="Password" name="pass" placeholder="Password" class="log-sign-input"><br/><br>


        <button  type="submit" class="black-button-orange-text log-sign-input"><b>Sign Up</b></button><br>
    </form>
    </div>
    <div class="width-full"><!--contains already have account to redirect-->
        <p class="center-text">Already have an account? <a href="login-front.php">Log in here</a></p>
        <php


        ?>
    </div>
    </body>

</html>