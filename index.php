<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IntraHelp</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        
        <!-- Update these with your own fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto+Slab:400,700&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="style.css">
        
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64748049ad80445890efac4b/1h1jha8f9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        
        

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
                <div class="shadow w-450 p-3 text-center" style="text-align: right">
            <h3 class="display-4 ">Hello, <?=$_SESSION['fname']?></h3>
            
		</div>
          
                
            </div>
          </div>
        
        
        <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Need help go....<strong>IntraHelp</strong> 
            </h1>
            <p class="section__subtitle section__subtitle--intro">welcome to your <strong>Virtual Assistant</strong> service</p>
            <img src="img/1st image.png" alt="Dwij Naranje Picture" class="intro__img">
        </section>
        
        <!-- About me part 2-->
        <section class="about-me2" id="about" style="background-image: url(img/services-bg2.jpg);">
            <h2 class="section__title section__title--services" id="Who_we_are">Who we are</h2>
            <style>h2{ color: #f8333c;}</style>
           <div class="about-me2__body">
                          
                <h3>US-Based, College-Educated Virtual Assistants</h3>
                <p>We only accept college-educated virtual assistants who live in the United States. Our hiring process is tough. Today, most of our newcomers are referred to us by assistants who our customers have loved for years.</p>
               <h3>Skills that match your needs</h3>
               <p>Zirtual Assistants are trained in their core areas of expertise. They already have tons of experience working for clients remotely and can help you streamline your outsourcing process. We match you to the Zirtual Assistant whose existing skills will make the biggest impact on your workload.</p>
               <h3>One dedicated Zirtual Assistant supported by specialists</h3>
               <p>A jack of all trades isn’t helpful. While all of our Zirtual Assistants can handle general administrative tasks, they each have their own professional experience, preferences, and talents. We pick the best one for you. If your Zirtual Assistant can’t handle a specific task at any time, they get advice from a specialist, or the specialist will take over (at no cost to you).</p><br>
               <h3 style="font-size: large;">Meet the Virtual Assistant who will support you.</h3><br>
               <b><a href="Pricing.php" class="btn success">Request A Consultantion</a></b>
               <b><a href="Pricing.php" class="btn info">view plans</a></b>
            
           </div>

        </section>
        <section class="about-me" id="about">
            <style>h2{ color: #f8333c;}</style>
           <h2 class="section__title section__title--about" id="What_we_do">What we do</h2>
           <p class="section__subtitle section__subtitle--about">Don’t let the little stuff add up big.
        
           <div class="about-me__body">
           <b><a href="Pricing.php" class="btn success">Request A Consultantion</a></b><br><br>
            <h3>Get stuff off your plate</h3>
            <p>If you’ve never worked with a virtual assistant before, no problem. We know exactly how to help business owners and executives get back hours of time.</p>
           <h3>Add trained hands</h3>
           <p>You’ve got some smart processes already running, but there’s just not enough people to help out, so work gets stalled. We unblock your team.</p>
           <br><h3>Solve your biggest time sucks</h3>
           <br>
            <h3>*Inbox Management</h3>
            <p>Get back 10% to 30% of your day by letting us use our tricks and tools to get you to inbox zero.</p>
            <h3>*Calendar Management</h3>
            <p>Move forward with innovative roadmaps and plans.</p>
        

           </div>
           
           <img src="img/WhatsApp Image 2023-05-24 at 11.17.40 PM.jpeg" alt="Jane leaning against a bus" class="about-me__img">
        </section>

        <!-- My services -->
        <section class="my-services" id="services" style="background-image: url(img/services-bg.jpg);">
            <h2 class="section__title section__title--services" id="Who_we_serve">Who we serve</h2>
            
            <style>div{ color: #fff;}</style>
            <div class="services">
                <div class="service">
                    <img src="img/images.jpg" alt="Executives Picture" class="intro__img2" ><br>
                    <h3>Executives</h3>
                    <p>Get freed up to tackle high-level strategies and operations.</p>
                </div> <!-- / service -->
                
                <div class="service">
                    <img src="img/images (2).jpg" alt="Entrepreneurs Picture" class="intro__img2"><br>
                    <h3>Entrepreneurs</h3>
                    <p>Move forward with innovative roadmaps and plans.</p>
                </div> <!-- / service -->
                
                <div class="service" >
                    <img src="img/images (1).jpg" alt="Small Business Owners Picture" class="intro__img2"><br>
                    <h3>Small Business Owners</h3>
                    <p>Optimize processes and save time at the right monthly price.</p>
                </div> <!-- / service -->
            </div> <!-- / services -->
        </section>
        
        
        

        <div id="skills">
            <h3 class="heading">Do you need an experienced virtual assistant?</h3>
            <p>Our Virtual Assistants have the top administrative skills and are well versed in technology<br> making them better and faster at administrative tasks and leaving you<br> free to focus on your expertise.</p>
            <ul>
                <li class="block">Inbox Management</li>
                <li class="block">Calendar Management</li>
                <li class="block">Event Planning</li>
                <li class="block">Making Travel Arrangements</li>
                <li class="block">Powerpoint Presentations</li>
                <li class="block">Expenses & Invoices</li>
                <li class="block">Social Media Management</li>
                <li class="block">Web Research</li>
                <li class="block">Data Entry</li>
                <li class="block">Content Creation</li>
                <li class="block">Google Docs + Microsoft Office Suite</li>
                <li class="block">Website Maintenance</li>
            </ul>
        </div>
        
        
        
        <div style="text-align: center; padding-top: 50px; background:#141c23; ">
            <h3>Put more focus on what you do best.</h3>
            <p style="font-size: large;">Meet the Virtual Assistant who will support you.</p>
            <b><a href="Pricing.php" class="btn success">Request A Consultantion</a></b>
            <b><a href="Pricing.php" class="btn info">view plans</a></b>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="top">
                        <span id="to-top">
                            
                            <a href="#home" class="btn"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                        </span>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- End footer -->

        
        <!-- Footer -->
        <footer class="footer" >
            
            <a href="mailto:dwijnaranjex12@gmail.com" class="footer__link">intrahrlp25@gmail.com</a>
            <div class="col-sm-6 col-md-3 item">
                <h4>Services</h4>
                <ul>
                    <a href="#">Web design</a><br>
                    <a href="#">Development</a><br>
                    <a href="#">Virtual Assistant</a><br>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h4>About</h4>
                <ul>
                    <a href="#">Company</a></li><br>
                    <a href="#">Team</a></li><br>
                </ul>
            </div>
            <div class="col-md-6 item text">
                <h4>Intrahelp</h4>
                <p>IntraHelp is a virtual assistant company that provides remote administrative, creative, and technical support to businesses and individuals.</p>
            </div>
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.linkedin.com/in/dwij-naranje-x12/">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.instagram.com/dwij_x12/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://wordpress.com/people/edit/dwijnaranje12.wordpress.com/dwijnaranje12">
                        <i class="fab fa-wordpress"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://twitter.com/DwijNaranje">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com/Dwijx12">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                
            </ul>
            <div class="col-sm-5 copyright">
                <p>
                    Copyright &copy; 2023 intrahelp
                </p>
            </div>
            
        </footer>
        
        
        <script src="js/index.js"></script>
        
    </body>
    <style>
        /* Navbar links */
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
    
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>