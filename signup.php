

<?php include('server.php') ?>

<html>
<head>
    <title>Ambulance service</title>
    <link  rel="stylesheet" type="text/css" href="styles/signup1.css"> 
    <link rel="stylesheet" type"text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/signup.js"></script>
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
<li> <h2  > &nbsp&nbsp&nbsp CURE PLUS <br> AMBULANCE SERVICE </h2> </li>
<li style="margin-left: 4.8%;" ><a href="home.php"> HOME </a></li>
<li><a href="services.php">  SERVICES</a></li>
<li><a href="news.php"> NEWS</a></li>
<li><a href="gallery.php"> GALLERY </a></li>
<li><a href="faq.php"> FAQ</a></li>
<li><a href="aboutus.php">ABOUT US </a></li>
<li><a href="contactus.php"> CONTACT US</a></li>
<li><a style="color: lightseagreen; " href="login.php"> <b> LOG IN </b> </a></li>
<li class="active"><a style="color: lightseagreen; " href="signup.php"> <b> SIGN UP </b> </a></li>

</ul>  </header> 
        
 
    
    <div class="container">
        <div class="main">
    <form action="signup.php" method="post" onsubmit="return ValidationEvent()">
        <h2 id="signup">SIGN UP HERE</h2><br>


<label id="labell" >Username :</label>
<input id="name" name="username" value="<?php echo $username; ?>" placeholder="First Name" type="text" required>


<label id="labell" >Age :</label>
<input id ="name" type="text" value="<?php echo $age; ?>" id="name" name="age" placeholder="Enter Age" required>


<label id="labell" >Email :</label>
<input id="name" name="email" value="<?php echo $email; ?>" placeholder="Valid Email" type="email"required>

<label id="labell" >Gender :</label>

<input  name="gender" type="radio" value="Male"required>
<label id="labell" >Male</label>
<input  name="gender" type="radio" value="Female"required>
<label id="labell" >Female</label><br>
<br>

<label id="labell" >Contact No. :</label>
<input id="name" name="contactNo" value="<?php echo $contactNo; ?>" placeholder="Contact No." type="text"required>

<label id="labell" >Address :</label>
<input id="name" value="<?php echo $add1; ?>" name="add1" placeholder="line 1" type="text"required>
<input id="name"  value="<?php echo $add2; ?>" name="add2" placeholder="line 2" type="text">
<input id="name" value="<?php echo $add3; ?>" name="add3" placeholder="line 3" type="text">


<label id="labell" >Password :</label>
<input id="name" name="password_1" placeholder="Enter password" type="password"required>
<label id ="labell">Enter password again:</label>
<input id="name" name="password_2" placeholder="Enter again" type="password"required>




<input type="submit" name="reg_user" value="Sign up" a href ="thankyou.php" />
<span style="font-family: 'Segoe UI'">Please re-check the information before signing up</span>
</form>
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

    
        <a href="contactus.php>"> <h2 id="GIVE_US_A_FEEDBACK">GIVE US A FEEDBACK</h2> </a>
    

    


        
</body>    
</html>
