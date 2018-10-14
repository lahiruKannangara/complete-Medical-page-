<?php 
	session_start(); 
?>

<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance service</title>
    <link  rel="stylesheet" type="text/css" href="styles/gallery.css"> 
    <link rel="stylesheet" type"text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fontastic.s3.amazonaws.com/qXDGBpBG6AawYwtmYPpQBb/icons.css" rel="stylesheet"/>
    
</head> 
<body>
<header>

<div style=" margin-left:84%; margin-top:-12px; position:absolute; ">
<form >
    <input type="text" placeholder="Search.." name="search">
    <button type="submit">Search</button>
</form>
</div>

<?php  if (isset($_SESSION['username'])) : ?>
<p  style="color:white; position:absolute; margin-top:24.8px; margin-left:84%; font-size: 18.5px; "  >Hi <?php echo $_SESSION['username']; ?>!  <a style="color:lightseagreen; text-decoration:none;" href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>





<ul class="main-nav">    
<li> <h2 style="font-size:20px;" > &nbsp&nbsp&nbsp CURE PLUS <br> AMBULANCE SERVICE </h2> </li>
<li style="margin-left: 4%;" ><a href="home.php"> HOME </a></li>
<li><a href="services.php">  SERVICES</a></li>
<li><a href="news.php"> NEWS</a></li>
<li class="active"><a href="gallery.php"> GALLERY </a></li>
<li><a href="faq.php"> FAQ</a></li>
<li><a href="aboutus.php">ABOUT US </a></li>
<li><a href="contactus.php"> CONTACT US</a></li>
<li><a style="color: lightseagreen; " href="login.php"> <b> LOG IN </b> </a></li>
<li><a style="color: lightseagreen; " href="signup.php"> <b> SIGN UP </b> </a></li>

</ul>  </header>
		
	

	<div class = "contact-title">
		<h1 align="center">Cure Plus Gallary</h1>
	</div>
	
	<div class="contain">
	
		<div class = "picture">
			<a href="images/1.jpg" target = "blank"> 
			<img src="images/1.jpg" alt="cure plus hospital">
				<div class = "about">Our Ambulances</div></a>
		</div>
		
		<div class = "picture">	
			<a href="images/2.jpg" target = "blank">
			<img src="images/2.jpg" alt="cure plus hospital">
				<div class = "about">Our Ambulances</div></a>
		</div>
			
		<div class = "picture">
			<a href="images/3.jpg" target = "blank">
			<img src="images/3.jpg" alt="cure plus hospital">
				<div class = "about">Mobile Service</div></a>
		</div>
			
		<div class = "picture">
			<a href="images/4.jpg" target = "blank">
			<img src="images/4.jpg" alt="cure plus hospital">
				<div class = "about">Emergancy Services</div></a>
		</div>

		<div class = "picture">
			<a href="images/5.jpg" target = "blank">
			<img src="images/5.jpg" alt="cure plus hospital">
				<div class = "about">Emergancy Services</div></a>
		</div>

		<div class = "picture">
			<a href="images/6.jpg" target = "blank">
			<img src="images/6.jpg" alt="cure plus hospital">
				<div class = "about">Emergancy Services</div></a>
		</div>

		<div class = "picture">
			<a href="images/7.jpg" target = "blank">
			<img src="images/7.jpg" alt="cure plus hospital">
				<div class = "about">Emergancy Services</div></a>
		</div>

		<div class = "picture">
			<a href="images/8.jpg" target = "blank">
			<img src="images/8.jpg" alt="cure plus hospital">
				<div class = "about">Our Medical Kits</div></a>
		</div>

		<div class = "picture">
			<a href="images/9.jpg" target = "blank">
			<img src="images/9.jpg" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>

		<div class = "picture">
			<a href="images/10.gif" target = "blank">
			<img src="images/10.gif" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>

		<div class = "picture">
			<a href="images/11.jpg" target = "blank">
			<img src="images/11.jpg" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>

		<div class = "picture">
			<a href="images/12.jpg" target = "blank">
			<img src="images/12.jpg" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>
>
		<div class = "picture">
			<a href="images/13.jpg" target = "blank">
			<img src="images/13.jpg" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>

		<div class = "picture">
			<a href="images/14.jpg" target = "blank">
			<img src="images/14.jpg" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>

		<div class = "picture">
			<a href="images/15.png" target = "blank">
			<img src="images/15.png" alt="cure plus hospital">
				<div class = "about">Cure Plus Emergancy Treatment Unit</div></a>
		</div>
		
		<div class = "picture">
			<a href="images/16.jpg" target = "blank">
				<img src="images/16.jpg" alt="X Ray Treatment">
				<div class = "about">X Ray Treatment</div> </a>
		</div>
	</div>



    <div class="footer-main-div">
        <div class ="address">
            <h3>VISIT US</h3> <br>
       <p > No.32<br>
        New lane<br>
        Colombo 8</p> 
    </div>

    <div class ="contactus">
           <h3> CONTACT US </h3> <br>
            +94112224448 <br>
            +94112224449 <br>
            1199 <br> <br>
            cureplus@gmail.com </p>

    </div>





    <div><p id="partners"> Partnerships</p> <br>
        <p> <a class="weblinks" href="https://www.lankahospitals.com/en/"> Lanka Hospital </a> <br><br>  <a class="weblinks" href="http://www.nawaloka.com/"> Nawaloka Hospital </a> <br><br> <a class="weblinks" href="https://www.hemashospitals.com"> Hemas Hospital </a> </p>
    </div>










    <div class="footer-social-icons">
        <ul>
            <li> <a href="https://www.facebook.com/"  target = "blank"><i class="fa fa-facebook"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-twitter"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-google-plus"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
            
        
    </div>

    
	<a href="contactus.php"> <h2 id="GIVE_US_A_FEEDBACK">GIVE US A FEEDBACK</h2> </a>

    

    


        
</body>    
</html>
