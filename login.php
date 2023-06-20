<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>.w-450 {
	width: 450px;
	}
	.vh-100 {
	min-height: 100vh;
	}
</style>
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
                <b><a href="register.php">Sign Up</a></b>
                
            </div>
          </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		  <a href="register.php" class="link-secondary">Sign Up</a>
		</form>
    </div>

	
        <!-- Footer -->
        <footer class="footer" >
            
            <a href="mailto:dwijnaranjex12@gmail.com" class="footer__link">intrahrlp25@gmail.com</a><br><br>
        <p>Copyright &copy; 2023 Intrahelp</p>
            
        </footer>
        
        
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
  position: relative;
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
  position: static;
  
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

</body>
</html>