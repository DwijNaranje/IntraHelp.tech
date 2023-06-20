<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pricing table</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        
    
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto+Slab:400,700&display=swap" rel="stylesheet"> 
        
        
        
        
        

    </head>
    <body>
        <div class="header">
            <b><a href="img/IntraHelp-logo.png" class="logo" style="font-family:'Courier New', Courier, monospace; color: #e39a21;">IntraHelp</a></b>
            <div class="header-right">
              <b><a href="index.php">Home</a></b>
              <b><a href="index.php#Who_we_are">Who We Are</a></b>
              <b><a href="index.php#Who_we_serve">Who We Serve</a></b>
              <b><a href="index.php#What_we_do">What We Do</a></b>
              <b><a href="FAQ.php">FAQs</a></b>
              <b><a href="Pricing.php">Pricing</a></b>
              <b><a href="logout.php">Logout</a></b>
              <div class="shadow w-450 p-3 text-center" style="text-align: right ">
            <h3 class="display-4 " style="">Hello, <?=$_SESSION['fname']?></h3>
            
		</div>
            </div>
          </div>
        

<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>



<h2 style="text-align:center">Pricing Table</h2>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">Rs 1499 / 1 day</li>
    <li>10GB Storage</li>
    <li>10 Emails</li>
    <li>10 Domains</li>
    <li>1GB Bandwidth</li>
    <li class="grey"><a href="https://rzp.io/l/s8fF4oxwt" class="button">Buy now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D">Pro</li>
    <li class="grey">Rs 7999 / 7 days</li>
    <li>25GB Storage</li>
    <li>25 Emails</li>
    <li>25 Domains</li>
    <li>2GB Bandwidth</li>
    <li class="grey"><a href="https://rzp.io/l/uEp6zp4HQU" class="button">Buy now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">Rs 11,999 / 12 days</li>
    <li>50GB Storage</li>
    <li>50 Emails</li>
    <li>50 Domains</li>
    <li>5GB Bandwidth</li>
    <li class="grey"><a href="https://rzp.io/l/Xgkucc5rXL" class="button">Buy now</a></li>
  </ul>
</div>


     
        
        
    </body>
    <style>
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.header {
  overflow: hidden;
  background-color: #333;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

  .wrapper
{
  display: flex;
}

.wrapper div
{
  width: 100px;
  height: 100px;
  background-color: blue;
  margin: 10px;
}
}

    </style>
</html>


<?php }else {
	header("Location: login.php");
	exit;
} ?>