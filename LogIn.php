<?php

session_start();  
      include 'int.php';
if(isset($_POST['Login'])){
  $user = $_POST['email'];
  $pass = $_POST['Password'];
  $query=mysqli_query($conn,"SELECT * FROM tourguide WHERE email = '$user' AND Password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION['id']=$row['UserID'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='tg.php'
    </script>
    <?php
}
}
      ?>

<!DOCTYPE html>
<html>
<head>   
   

<link rel="stylesheet" href="form new trip.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  

 <div class ="logo"><p>Eye T👁 Kingdom</p>


<title>Sign up</title>
<nav class="menu">
<ul>
 
 


<li> <a href="http://localhost/project/aboutus.php"> <i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
<li><a href="http://localhost/project/contact%20us.php"><i class="fa fa-envelope" aria-hidden="true"></i>
Contact</a></li>



<?php if( isset($_SESSION['id']) && !empty($_SESSION['id']) )
{
?>
<li> <a href="http://localhost/project/tg.php"> <i class="	fas fa-user" aria-hidden="true"></i><?php echo $_SESSION['id'];  ?></a></li>
<li> <a href="logout.php"> <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>Logout</a></li> 
<?php }else{ ?>
<li> <a href="Login.php"> <i class="glyphicon glyphicon-log-in" aria-hidden="true"></i> Login</a></li>
<li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>SignUp</a></li>
<?php } ?>

<li> <a href="http://localhost/project/home.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>



</ul>
</nav>

   
  
  </head>
  <body>

<section class = "MainBox" >
<div class="title" > Log in to your account  </div>
<form action="Login.php" method="post">
<div class="Form">

<div class=" inputText" > <span class="sub" >  Email </span > 
<input type="email" name="email" required  placeholder="Enter the email you signed up with" class="InputFieldOne"   > </div>  <br>
<br> <br>
<div class=" inputText" > <span class="sub" >  Your password </span > 
<input type="password" name="Password" required class="InputFieldOne" > 
<br><br><br>
<input type="submit" name="Login" value="Login" class="ClickBut"> 

<input type= "button" value="SignUp" class="ClickBut" onClick="location.href='signup.php'">

</div>  <br>



<div class="inputForm"> 
If you forgot your password, please click <a href="http://localhost/project/password_reset.php"> here </a> </div>

  <br><br>


</form>
  </section>
<script src="script.js"></script>

    <section> <footer class="footer">
<div class="container">
<div class="row">
<div class="footer-col">
<h4> Eye To Kingdom </h4>
</div>

<div class="footer-col">
<h4>Useful sites </h4>
<ul>
<li><a href="https://visa.visitsaudi.com/?_ga=2.34715105.1997200488.1646064673-1161829628.1629642741">Saudi eVisa Portal</a></li>
<li><a href="https://www.visitsaudi.com/en/understand">About Saudi</a></li> </ul></div>		

<div class="footer-col">
<h4>Contact </h4>
<ul>
<li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact us  </a> </li>
</ul> </div>

</div></div></footer>
</section>
    
</body>
</html>