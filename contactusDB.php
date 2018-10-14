<?php 

// variable declaration
$name = "";
$email    = "";
$message = "";


// connect to database
$connection = mysqli_connect('localhost', 'root', '', 'mydb');



if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
)

{
	$name = $_POST['name'];
	$email = $_POST['email'];
    $message = $_POST['message'];
}


$query = "INSERT INTO `contact` (name, email, message) VALUES ('$name', '$email', '$message')";
$result = mysqli_query($connection, $query);

header("location: thankyou.php");

?>