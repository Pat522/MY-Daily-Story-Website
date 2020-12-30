<?php 








 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Story</title>
    <link href="style.css" rel="stylesheet">



<script type="text/javascript">

 
    
  
function come()
{
    alert("hello ji");
}

     </script>     


    


    

</head>
<body>
    <header>
        <div class="rows">

            <div class="logo">
                <img src="">
            </div>

            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                 <li><a href="register_c.php">Customer Sign UP</a></li>
                <li><a href="login.php">Customer Login</a></li>
                <li><a onclick="alert('future section');">Contact Us</a></li>
                <li><a onclick="alert('future section');">About Us</a></li>
                
                <li><a ><?php session_start(); if(isset($_COOKIE['login'])) echo $_COOKIE['login'];?> </a></li>
                  
      
            </ul>
        </div>
        <div class="hero">
 
           <h1 id="basic"> The Largest Library <br>of Multimedia Stories</h1>
          <div class="button">
           <a href="#city" class="btn btn-half">Search Availability</a>
           <a href="#meal1" class="btn btn-full"  >Read Story</a>
           
        </div>
    </div>
    </header>


    <section class="features">
       <h3   class="text-center">This is a place where you can post any writing.</h3>
       <p class="copy">One of the most friendly writing communities I’ve come across. People are very active, friendly, and engaging. The site is mostly teens, but definitely spans a wide range where I’ve seen stories get feedback from teachers, professors, editors, and even bestselling authors.
The posting style on Commaful is a bit different than traditional writing, so if you’re looking to write just copy and paste a novel onto the site, then this probably isn’t the best site for you. Short stories are best for this site (or if you just want to test novel ideas and not write out the full story).<br>
The community is very active and many readers and writers love its new format for storytelling.</p>
   
    </section>

    <section class="meal" id="meal1">
        <ul class="meal-showcase">
            <li>    
<center><h7>1.The Camel And The Baby</h7>
</center>
                <figure class="meal-photo clearfix">
                       
                    <img src="99.jpg" onclick="window.location.href='story9.php'" name="99.jpg">
                </figure>
            </li>
            <li>
                <center><h7>2.The Farmer And The Well</h7></center>
                <figure class="meal-photo">
                    <img src="22.jpg"onclick="window.location.href='story2.php'" name="22.jpg">
                </figure>
            </li>
            <li><center><h7>3.True Friends Love You Anyway</h7></center>
                <figure class="meal-photo">
                    <img id="33.jpg" src="33.jpg" onclick="window.location.href='story3.php'" name="33.jpg">
                </figure>
            </li>
            <li><center><h7>4.Elephant And Friends</h7></center>
                <figure class="meal-photo">
                    <img src="44.jpg" onclick="window.location.href='story4.php'" name="44.jpg" >
                </figure>
            </li>
            
            <li><center><h7>5.The Cows And The Tiger</h7></center>
                <figure class="meal-photo">
                    <img src="55.jpg" onclick="window.location.href='story5.php'" name="55.jpg">
                </figure>
            </li>
            <li><center><h7>6.The Young Crab And His Mother</h7></center>
                <figure class="meal-photo">
                    <img src="66.jpg" onclick="window.location.href='story6.php'" name="66.jpg">
                </figure>
            </li>
            <li><center><h7>7.The Other Side Of The Wall</h7></center>
                <figure class="meal-photo">
                    <img src="77.jpg" onclick="window.location.href='story7.php'" name="77.jpg">
                </figure>
            </li>
            <li><center><h7>8.The Dog At The Well</h7></center>
                <figure class="meal-photo">
                    <img src="88.jpg" onclick="window.location.href='story8.php'" name="88.jpg">
            </li>
        </ul>
    </section>

    <section class="mobile">
        <h3 class="text-center">Download Our App From PlayStore and AppStore</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pic">
                    <img src="play.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="working">
                    <div class="work-step">
                        <div><b>1</b></div>
                        <p>Click On the Below Link</p>
                    </div>
                    <div class="work-step">
                        <div><b>2</b></div>
                        <p>Click On Install</p>
                    </div>
                    <div class="work-step">
                        <div><b>3</b></div>
                        <p>Accept Terms And Conditions</p>
                        
                        <a href="https://play.google.com/store?hl=en_IN"><img src="google.jpg"></a>
                       <a href="https://www.apple.com/ios/app-store/"><img src="appstore.jpg"></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cities" id="city">
        <h3 class="text-center">Our Writers Are Currently In the Cities</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="delhi1.jpg">
                <h4>Delhi</h4>
                <p><i class="fa fa-cog"></i>5000+ Happy Followers</p>
                <p><i class="fa fa-cog"></i>Online Reading</p>
                <p><i class="fa fa-cog"></i>24x7</p>
            </div>

            <div class="col-md-3">
                <img src="mumbai2.jpg">
                <h4>Mumbai</h4>
                <p><i class="fa fa-cog"></i>2800+ Happy Followers</p>
                <p><i class="fa fa-cog"></i>Online Readers</p>
                <p><i class="fa fa-cog"></i>24x7</p>
            </div>

            <div class="col-md-3">
                <img src="agra2.jpg">
                <h4>Agra</h4>
                <p><i class="fa fa-cog"></i>800+ Happy Followers</p>
                <p><i class="fa fa-cog"></i>Newely Readers</p>
                <p><i class="fa fa-cog"></i>24x7</p>
            </div>

            <div class="col-md-3">
                <img src="kolkata1.jpg">
                <h4>Kolkata</h4>
                <p><i class="fa fa-cog"></i>3000+ Happy Customers</p>
                <p><i class="fa fa-cog"></i>Online Readers</p>
                <p><i class="fa fa-cog"></i>24x7</p>
            </div>
        </div>
    </div>
    </section>

    <sectionc class="testimonials">
        <h3 class="text-center">Our Readers Can't Live Without Us</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <blockquote>
                        <h4>Akshit Pamecha</h4>
                        <p>I Love the Way You Provide Your Services</p>
                       <cite><img src="new.svg"></cite>
                    </blockquote>
                </div>
                <div class="col-md-4">

                    <blockquote>
                        <h4>Shubham Pathak</h4>
                        <p>The Best Story Site and Best Stories.</p>
                        <cite><img src="new.svg"></cite>
                    </blockquote>
                </div>
                <div class="col-md-4">

                    <blockquote>
                        <h4>Nitish Mehra</h4>
                        <p>The Content and Language is Awesome</p>
                        <cite><img src="new.svg"></cite>
                    </blockquote>
                </div>
                
            </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <h2 class="text-center">
                We Will Happy To Hear Your Experience With Us.
            </h2>
        </div>
        <div class="row gap">
            <div class="col-md-6">
                <input type="text" placeholder="Username" class="form-control"><br>
                <input type="email" placeholder="Email" class="form-control"><br>
                <input type="password" placeholder="Password" class="form-control">
                <br>
                <textarea class="form-control frm" placeholder="Comments"></textarea>
                <button class="btn btn-warning btn-block">Submit</button>
            </div>
            <div class="col-md-6">
                <img class="feed" src="feedback.png">
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Kalyanpur, Kanpur (U.P)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 9305298676</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>santoshpathak.sp90@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  
</body>
</html>