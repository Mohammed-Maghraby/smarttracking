
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "task";

$conn= mysqli_connect($host , $user , $pass , $dbname);


if(isset($_POST['send'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $mess = $_POST['message'];

    $insert= "INSERT INTO `contact` VALUES ( NULL , '$name', '$email' ,'$mess' ) ";
    $m =mysqli_query($conn, $insert);
   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title> Smart Tracking </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

</head>
<body>
	   <div class="all">
  <nav>
        <div class="logo">
            <p style="height:5px; width:5px;">
                <img src ="logo.jpg" style="height:55px; width:60px;">
            </p>
        <a href="#"><span> Smart Tracking </span></a>
        </div>

        <div class="navlinks">
            <ul>
            <a href="../Home/tracking.html"><li>Home</li></a>
            <a href="../Store/Store.html"><li> Store </li></a>
            <a href="#"><li class="active"> Contact US</li></a>
            </ul>
        </div>
    </nav>

    <!--Start Contact-->
<div class="contactus">
    <div class="Container">
        <div calss="main-heading">
            <h1> Contact Us </h1>
            <p> Great vision without great people is irrelevant let's work together. <br> Send us a message and we will be in touch within one business day </p>
        </div>
        <div class="content">
            <form method="POST">
                <p class="name">Your Name</p>
                <input class="main input" id="jj" type="text" name="name" placeholder=""> <br>
                <p class="email">Your Email</p>
                <input class="main input" id="jj" type="email" name="email" placeholder="">
                <textarea class="main-input" name="message" placeholder="Your Message" ></textarea>
                <input type="submit" name="send" value="Send Message">
            </form>
            <div class="info">
                <h4>Get In Touch</h4>
                <span class="phone">+20 110 247 0014</span>
                <span class="phone">+02 25320081</span>
                <h4>Where We Are</h4>
                <address>
                    Faysal Street ,Giza
                </address>
            </div>
        </div>
    </div>
</div>
<!--End Contact-->

               <footer>
        <div class="foot">

            <div class="contact">
                <h3> Contact </h3>
                <p> Phone : 01102470014 </p>
                <p> Address : Faysal Street ,Giza </p>
                <p> E-mail : mohammedmaghraby4@gmail.com</p>

            </div>

            <div class="links">
                 
                <h3> Links </h3>
                <ul>
                    <a href="#"> <li>Home</li></a>
                    <a href="#"> <li> Store </li> </a>
                    <a href="#"> <li> Contact US </li></a>
                </ul>

            </div>

            <div class="social">
                <h3> Social </h3>
                <i class="fab fa-facebook-square fb"></i>
                <i class="fab fa-twitter-square tw"></i> <br>
                <i class="fab fa-instagram ig"></i>
                <i class="fab fa-youtube yt"></i>
            </div>
            
        </div>

        

        <div class="copy">
            <p>Copyrights reserved to Mohamed Maghraby , Mohamed Ragab , Sohila Mohamed</p>
        </div>
    </footer>

        <!-- This Is Footer -->

</body>
</html>