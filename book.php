<?php
require 'int.php';

$trip_id = $_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM trip JOIN tourguide ON tourguide.UserID = trip.UserID And ID= '$trip_id'");

$row=mysqli_fetch_all($query, MYSQLI_ASSOC);






if(isset($_POST['submit'])){

  $id = $_GET['id'];
  $firstname=$_POST['FirstName'];
  $lastname=$_POST['LastName'];
  $mobile=$_POST['MobileNumber'];
  $email=$_POST['email'];

$query="Insert  Into booktrip(ID,FirstName,LastName,MobileNumber,Email) VALUE ('$id','$firstname','$lastname','$mobile','$email')";

if(mysqli_query($conn,$query))
{ 
  ?>
  <script>
    alert('Successfully Booked');
    document.location='dummy.php'
   

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
    </div> 
  <body>
  <section class = "MainBox" >
  <div class="title" > Book Trip </div>
  <div class="container">

  <div class="container-fluid mt-3">
 <div class="row"> 
<div class="col-md-4">
<div class="card">

  <?php foreach($row as $trip) { ?>
<div class="card">
  <img src="<?php echo htmlentities($trip['img']); ?>" class="card-img-top" alt="card image">
  
  

    <div class="card-titile"> <p><?php echo htmlentities($trip['Place']); ?></p>

<?php } ?>





<div class="BookInfo" >
<form  method="POST">

<div class=" inputText" > <span class="sub" >  First Name</span > 
<input type="text" name="FirstName" pattern="([A-Za-z\s]).{2,20}"  
title="only letters accepted" reqired class="InputFieldOne"
 > </div>  <br>
<div class=" inputText" > <span class="sub" >  Second Name </span > 
<input type="text" name="LastName" pattern="([A-Za-z\s]).{2,20}"  
title="only letters accepted" reqired class="InputFieldOne" > </div> <br>

<div class=" inputText" > <span class="sub" >  Mobile Number:</span > 
<input type="tel" name="MobileNumber" pattern="[0-9].{9,15}" title="Example: 05xxxxxxxx"  reqired class="InputFieldOne" > </div> <br>

<div class=" inputText" > <span class="sub" >  E-mail: </span > 
<input type="email" name="email" pattren="(?![_.-])((?![_.-][_.-])[\w.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}"
 title=" Invalid email" reqired class="InputFieldOne" > </div>  <br>

 <input type="checkbox" reqired > I agree that the site is not responsible for any financial transactions between the tourist and the tour guide.
<br><br>
<input type="submit" name="submit" class="ClickBut"> &nbsp; &nbsp; 
</form> </div>
</div> </div> 
 
</div></div>

  </section>

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
<li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact us </a> </li>
</ul> </div>

</div></div></footer>
</section>
    
</body>
</html>