<?php
include 'dbconnect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop | Royal Ochre</title>
    <link href="../CSS/shop.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav>
    <div class="nav-search">
        <input type="text" class="nav-search-bar">
        <button class="search-button">Search</button>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Fashion</a>
        </li>
        <li>
            <a href="#">Health & Beauty</a>
        </li>
        <li>
            <a href="#">Electronics</a>
        </li>
        <li>
            <a href="#">Sports</a>
        </li>
        <li>
            <a href="#">House Equipment</a>
        </li>
        <?php
        if(!isset($_SESSION['name'])){
            //header("Location: index.php");
        echo '<a href="login-front.php">Log in here</a>';
        }
        else{
        echo $_SESSION['name']." <a href='logout.php'>Log out</a>";
        }
        ?>
    </ul>
</nav>
<div class="header-image-container">
    <img src="../images/img-6.jpg" class="header-image">
    <div class="header-img-text">
        <h4>Shop the Right Way</h4>
        <!--            <a href="courses.html"><button class="header-button">Go to Courses</button></a>-->
    </div>
</div>

<h3 class="subheader">Daily Deals</h3>

<div class="daily-deals-images">
    <div class="inner-imagebox-left">
        <img src="../images/img-1.jpeg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
    <div class="inner-imagebox-left">
        <img src="../images/img-2.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
    <div class="inner-imagebox-left">
        <img src="../images/img-10.png" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>

    <div class="inner-imagebox-right">
        <img src="../images/img-5.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
</div>

<div class="daily-deals-images">
    <div class="inner-imagebox-left">
        <img src="../images/img-9.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
    <div class="inner-imagebox-left">
        <img src="../images/img-7.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
    <div class="inner-imagebox-left">
        <img src="../images/img-4.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>

    <div class="inner-imagebox-right">
        <img src="../images/img-8.jpg" class="deals-img">
        <a href="#"><button class="buy-now-btn">Buy Now</button></a>
    </div>
</div>


<nav class="footer">
    <div class="footer-text">
        <h4>Shop @ Royal Ochre</h4>
    </div>
    <ul class="footer-nav-links">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Fashion</a>
        </li>
        <li>
            <a href="#">Health & Beauty</a>
        </li>
        <li>
            <a href="#">Electronics</a>
        </li>
        <li>
            <a href="#">Sports</a>
        </li>
        <li>
            <a href="#">House Equipment</a>
        </li>
    </ul>
</nav>
</body>
</html>