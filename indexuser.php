<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
    


<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="coSntactform/contactform.js"></script>


</head>
<body>


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#myDonations">My Donations</a></li>
 	        <li><a href="#Donate">Donate Now</a></li>

            <li><a href="#service">Services</a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="#Events">Events</a></li>

           <li>
                                <button class="sign-in-btn" id="myBtn">Sign Out</button>
                                </li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->




<section class="main-section paddind" id="Donate"><!--main-section-start-->
    <div class="container">
        <h2>Donate</h2>
        <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
            <li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Apparels</a></li>
            <li><a href="#" data-filter=".webdesign" >Stationery</a></li>
            <li><a href="#" data-filter=".printdesign" >Books</a></li>
            <li><a href="#" data-filter=".photography" >Accessories</a></li>
        </ul>
       </div> 
        
    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
                <div class=" Portfolio-box printdesign">
                    <a href="#"><img src="images/books.jpg" alt=""></a> 
                    <h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                    <a href="#"><img src="images/stationery.jpeg" alt=""></a>   
                    <h3>Luca Theme</h3>
                    <p>Web Design</p>
                </div>
                <div class=" Portfolio-box branding">
                    <a href="#"><img src="images/tshirt.jpg" alt=""></a>    
                    <h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>

                 <div class=" Portfolio-box branding">
                    <a href="#"><img src="images/hmprod.jpeg" alt=""></a>   
                    <h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>

                 <div class=" Portfolio-box branding">
                    <a href="#"><img src="images/woollen.jpg" alt=""></a>   
                    <h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>

                <div class=" Portfolio-box photography" >
                    <a href="#"><img src="images/bottles.jpg" alt=""></a>   
                    <h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>

                <div class=" Portfolio-box photography" >
                    <a href="#"><img src="images/watch.png" alt=""></a>   
                    <h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>

                <div class=" Portfolio-box photography" >
                    <a href="#"><img src="images/belts.jpg" alt=""></a>   
                    <h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>


    </div>
        <div class="text-center"><button class="input-btn" id="donateNowBtn">Donate now</button></a>
                                </div>


</section><!--main-section-end-->



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
     <div class="modal-content">
    <span class="close">&times;</span>


 <div class="form">
 
      
      <div class="tab-content">
        <div id="signup">   
           <h2>One step away from making someone smile</h2>
                     <form action="donatenow.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                        <select class="form-control" id="sel1" name="category">
                           <!--  <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option> -->
                            <?php
                                 define('DB_HOST', 'localhost');
                                    define('DB_NAME', 'dfg');
                                    define('DB_USER','root');
                                    define('DB_PASSWORD','');
                                    session_start();

                                    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
                                    $db = mysqli_select_db($con, DB_NAME); 
                                    $q = "Select categoryName from category";
                                    $d = mysqli_query($con,$q);
                                    $num = mysqli_num_rows($d);
                                    
                                    
                                        for ($x = 0; $x < $num; $x++)
                                        {
                                            $row=mysqli_fetch_array($d);
                                            echo "<option>$row[0]</option>";
                                        } 
                                    
                                    mysqli_close($conn);
                            ?>
                          </select>
                        </div>


                        
                         <div class="form-group">
                            <input type="num" name="quantity" class="form-control input-text" id="quantity" placeholder="Enter quantity" />
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="description" id="description" placeholder="Enter description"/>
                            <div class="validation"></div>
                        </div>

                     

                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="address" id="address" placeholder="Enter pickup address" />
                            <div class="validation"></div>
                        </div>
                       
                        
                        <div class="text-center"><button type="submit" class="input-btn">Donate! </button></div>
                    </form>

        </div>
        
        <div id="login">   
                     <form action="login.php" method="post" role="form" class="contactForm">
                       
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
            <div class="form-group">
                            <input type="password" class="form-control input-text" name="password" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Please enter at least 8 chars" />
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="input-btn">sign in</button></div>
                    </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
         
          <p>&nbsp;</p>
                
                
    </div>
    </div>

  




<section id = "myDonations">
<h2 class="increase_font_contribution fontFamilyContribution " style="margin: 1em" >My Donations</h2>
<div class = "container">
<div class="row-md-3">
<?php
   
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db = mysqli_select_db($con, DB_NAME); 
$images["T-shirts"] = "images/tshirt.jpg";
$images["Books"] = "images/books.jpg";
$images["stationery"] = "images/stationery.jpeg";
$images["Bottoms"] = "images/hmprod.jpeg";
$images["Woollens"] = "images/woollen.jpg";
$images["Water Bottles"] = "images/bottles.jpg";
$images["Watch"] = "images/watch.png";
$images["Belt"] = "images/belts.jpg";


$email = $_SESSION['username'];


$t = "Select userId from users where email LIKE '$email'";
$t1 = mysqli_query($con,$t);
$r = mysqli_fetch_array($t1);
$reqdVar = $r[0];
$_SESSION['userId'] = $reqdVar;
$q = "Select * from donations where userId = $reqdVar";
$d = mysqli_query($con,$q);
$num = mysqli_num_rows($d);
if($num == 0)
{
    echo"<h4 class='fontFamilyContribution'>You haven't made any contributions yet! Donate now!</h4>";
}
else
{
    echo "<div class='row'>";
    for ($x = 0; $x < $num; $x++)
    {
        $row=mysqli_fetch_array($d);
        echo "<div style='margin-top: 0px'><h3>$row[2]</h3><p>Quantity: $row[4]</p></div>";
        echo "<div style='margin-right:100px;' class='Portfolio-box photography'><img src='".$images[''.$row[2]]."' alt=''></div>";

    } 
    echo "</div>";
}

?>
</div>
</div>

</section>

 <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="images/mid.jpg" alt=" Test" class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3 class="increase_font_contribution fontFamilyContribution">Our contribution till date!</h3>
                <p class="fontFamilyContribution">D4G connects users to NGOs who in turn pick up donations and gift it to the needy. Let us all pledge to try our best to bring smiles on the faces of the underprivileged</p>
            </div>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4 class="fontFamilyContribution">NGOs connected Reached</h4>
                    <!-- <h5 class="counter">653</h5> -->
                    <?php
                    define('DB_HOST', 'localhost');
                    define('DB_NAME', 'dfg');
                    define('DB_USER','root');
                    define('DB_PASSWORD','');

                    $con = MySQLi_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
                    $db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 

                    $q = "Select count(*) from ngos";

                    $d = mysqli_query($con,$q);
                    $row=mysqli_fetch_array($d);
                    $c = $row[0];
                    echo "<h5 class='counter'>$c</h5>";
                    ?>

                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o"  aria-hidden="true"></i>
                    <h4 class="fontFamilyContribution">Our community</h4>
                    <!-- <h5 class="counter">823</h5> -->
                    <?php
                    $q = "Select count(*) from users";

                    $d = mysqli_query($con,$q);
                    $row=mysqli_fetch_array($d);
                    $c = $row[0];
                    echo "<h5 class='counter'>$c</h5>";
                    ?>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4 class="fontFamilyContribution">Total Items collected</h4>
                    <!-- <h5 class="counter">45</h5> -->
                    <?php
                    $q = "Select sum(quantity) from donations";

                    $d = mysqli_query($con,$q);
                    $row=mysqli_fetch_array($d);
                    $c = $row[0];
                    echo "<h5 class='counter'>$c</h5>";
                    ?>
                </div>
                <div class="clearfix"> </div>

        </div>
        <div class="clearfix"> </div>

    </div>


<section class="main-section" id="service"><!--main-section-start-->
    <div class="container">
        <h2>Services</h2>
        <h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-truck"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Door to door pick-ups</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                 <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-medkit"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Collaborative aids</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Events and drives</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
               
            </div>
            

            <figure class="col-lg-8 col-sm-5  text-right wow fadeInUp delay-02s">
                <img src="images/services.jpg" alt="">
            </figure>
        
        </div>
    </div>
</section><!--main-section-end-->   


    
    
<section class="main-section alabaster" id = "Events"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
            
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p> 
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            	<img  src="images/event1.jpg" alt="">
                <br>
                <br>
                <br>

                <img  src="images/event2.jpg" alt="">
                

            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>Events</h2>
            	<p>&nbsp;</p>
                <p>&nbsp;</p>
                
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>Event 1</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>   
                    <div class="contact-info-box address wow fadeInRight delay-04s">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone wow fadeInRight delay-04s">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                </div>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>Event 2</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div> 
                     <div class="contact-info-box address wow fadeInRight delay-04s">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone wow fadeInRight delay-04s">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                </div>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>Event 3</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>  
                     <div class="contact-info-box address wow fadeInRight delay-04s">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone wow fadeInRight delay-04s">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                </div>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                 <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter=".1" class="current" >1</a></li>
            <li><a href="#" data-filter=".2" >2</a></li>
            <li><a href="#" data-filter=".3" >3</a></li>
            <li><a href="#" data-filter=".4" >4</a></li>
        </ul>
       </div> 
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="business-talking"><!--business-talking-start-->
    <div class="container">
        <h2>Want to contact us?</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
    
        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Address:</h3>
                    <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Phone:</h3>
                    <span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email:</h3>
                    <span>hello@knightstudios.com</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>Hours:</h3>
                    <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
               
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                    </form>
                </div>  
            </div>
        </div>
</section>

</script>
<!-- //script for responsive tabs -->       
<!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!--<script type="text/javascript">
$(document).ready(function(){
    var arr=[]
    var count=-1
    function changeImage(){
        count++
        if(count>=arr.length){
            count=0
            }
        $('#header').attr('style','background:url('+arr[count]+')') 
        }


    setInterval(function() { changeImage() },5000)
})
</script>  -->
    
<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
    
   
<script type="text/javascript">
    document.getElementById("myBtn").onclick = function () {
        location.href = "index.php";
    };
</script>   

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>
    
<script type="text/javascript">
        var video= $('#videoId'); 
        video.addEventListener('ended',function(){
            video.src="img/";
        })
        
        
        </script>
    
<script>

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("donateNowBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

    
</body>
</html> 