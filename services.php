<?php 
	session_start(); 
?>
<html>
<head>
    <title>Ambulance service</title>
    <link  rel="stylesheet" type="text/css" href="styles/services.css"> 
    <link rel="stylesheet" type"text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<p  style="color:white; position:absolute; margin-top:23.8px; margin-left:84%; font-size: 18.5px; "  >Hi <?php echo $_SESSION['username']; ?>!  <a style="color:lightseagreen; text-decoration:none;" href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>





<ul class="main-nav">    
<li> <h2 id="name" > &nbsp&nbsp&nbsp CURE PLUS <br> AMBULANCE SERVICE </h2> </li>
<li style="margin-left: 4.8%;" ><a href="home.php"> HOME </a></li>
<li class="active"><a href="services.php">  SERVICES</a></li>
<li><a href="news.php"> NEWS</a></li>
<li><a href="gallery.php"> GALLERY </a></li>
<li><a href="faq.php"> FAQ</a></li>
<li><a href="aboutus.php">ABOUT US </a></li>
<li><a href="contactus.php"> CONTACT US</a></li>
<li><a style="color: lightseagreen; " href="login.php"> <b> LOG IN </b> </a></li>
<li><a style="color: lightseagreen; " href="signup.php"> <b> SIGN UP </b> </a></li>

</ul>  </header> 


        
    


    <div style="margin-bottom: 5%; margin-top: -35%;" >
            <h1 style="margin-top: -42%;margin-bottom: 3%;" >OUR SERVICES</h1>

        <div  style=" margin-left: 8%;">  <a style="color: white; font-size: 25px; text-decoration: none;" href="ambulanceservice.html">  AMBULANCE SERVICE</a> <a style="color: white; font-size: 25px; text-decoration: none;margin-left: 20%;" href="mobilelaboratory.html"> MOBILE LABORATORY</a> <a style="color: white; font-size: 25px; text-decoration: none;margin-left: 15%;" href="primarymedicaladvice.html">PRIMARY MEDICAL ADVICE </a></div> 
        <a href="ambulanceservice.php"> <img src="images/111.jpg" width="480px" height="300px" style="margin-left: 20px; margin-right: 5px;" > </a>
        <a href="mobilelaboratory.php"> <img src="images/22.jpg" width="480px" height="300px" style="margin-left: 5px; margin-right: 5px;"> </a>
        <a href="primarymedicaladvice.php"> <img src="images/33.jpg" width="480px" height="300px" style="margin-left: 5px; margin-right: 5px;"> </a>



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
