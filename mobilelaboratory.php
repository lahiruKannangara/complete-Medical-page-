<?php 
	session_start(); 
?>

<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ambulance service</title>
    <link  rel="stylesheet" type="text/css" href="styles/mobilelaboratory1.css"> 
   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" type="text/css" href="styles/confirm1.css">
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

 
    <div style="margin-bottom: 100px; margin-top: -53%;" >
      
    <form>
        <h1 align="center" id="topic" style="color: #00FFFF; font-size:50px;;"><ins>Medical Laboratory Services</ins></h1><br><br>
    <table>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">BLOOD TEST<input type="checkbox" id="BD" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">RADIOLOGY SERVICES<input type="checkbox" id="RS" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">KIDNEY CARE CENTER<input type="checkbox" id="KCC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">WOMEN’S WELLNESS CENTRE<input type="checkbox" id="WWC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">MOTHER & BABY CARE<input type="checkbox" id="MBC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">PHYSIOTHERAPY<input type="checkbox" id="PPY" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">DENTAL CLINIC<input type="checkbox" id="DC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">ENT CENTRE<input type="checkbox" id="EC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">COSMETIC CLINIC<input type="checkbox" id="CC" ><span class="checkmark"></span></label></strong><br/></span></td></tr>
      <tr><td><span style="padding-left:40px;"><strong><label class="container">GENERAL MEDICINE<input type="checkbox" id="GM"><span class="checkmark"></span></label></strong><br/></span></td></tr> 
        
        

        
        <tr><td><button type="submit" form="nameform" value="Submit" class="submitbtn" id="sbmtb"  onclick="Validate()">Submit</button></tr></td>


    </table>  
    </form>
      
    <!-- Error bar -->
    </div>
    <div id="Errorbar">Please select at least one item...</div>

    




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

    
        <a href="contactus.php>"> <h2 id="GIVE_US_A_FEEDBACK">GIVE US A FEEDBACK</h2> </a>
    
    <script src="Js/mobilelaboratory1.js"></script>
       
</body>    
</html>
