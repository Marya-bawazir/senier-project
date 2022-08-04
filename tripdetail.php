
<?php

require 'int.php';






$trip_id = $_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM trip JOIN tourguide ON tourguide.UserID = trip.UserID And ID= '$trip_id'");

$row=mysqli_fetch_all($query, MYSQLI_ASSOC);






?>


<!DOCTYPE html>
<html>
 <head>   
   

<link rel="stylesheet" href="trip details.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
  
<meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 

 
 
 
  
 <div class ="logo"> <p>Eye T👁 Kingdom</p>   
  <title>Home</title>
      <nav class="menu">
     <ul>
       
       
  
    
    <li> <a href="http://localhost/project/aboutus.php"> <i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
 <li><a href="http://localhost/project/contact%20us.php"><i class="fa fa-envelope" aria-hidden="true"></i>
Contact</a></li>

   

      <?php if( isset($_SESSION['id']) && !empty($_SESSION['id']) )
{
?>
<li> <a href="http://localhost/project/tg.php"> <i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['id'];  ?></a></li>
      <li> <a href="logout.php"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Logout</a></li> 
<?php }else{ ?>
  <li> <a href="Login.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Login</a></li>
     <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>SignUp</a></li>
<?php } ?>
      
    <li> <a href="http://localhost/project/home.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    
 
     
   </ul>
   


  </nav>
     
 <nav class="menu">

<form action="search.php" method="POST" class="search-form">  
   <input type="text" class="form-control" name="search" placeholder="Where do you want to go?">  
  <button type="submit" name="submit-search" class="input-group-text btn">Search </button> 
   </form> </div>
   

   
</nav>
  </head>
  
  <body>
     <hr>
     <section class="feature">


<p>Book Trip & More Details</p>
<hr>
<?php foreach($row as $tourguide) { ?>
        <header class="header">
       <div class="user">
<img src="<?php echo htmlentities($tourguide['Profile_img']);?>" class="card-img-top" alt="card image">
<h3>Tour Guide information </h3>
<p><?php echo htmlentities($tourguide['First_name']); ?> <?php echo htmlentities($tourguide['Last_name']); ?></p>
        
 </div>
 <?php } ?>

   <nav class="navbar">    
    
   <?php foreach($row as $trip) { ?>

   <a href="book.php?id=<?=$trip['ID']?>" class= click btn>book</a>
   <?php } ?>

   <?php foreach($row as $tourguide) { ?>


     <a href="#contact"><i class="fa fa-phone-square" aria-hidden="true"></i><?php echo htmlentities($tourguide['Mobile_Number']); ?> </a>
     <a href="#e-mail"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo htmlentities($tourguide['email']); ?></a>
  </nav>
</header>
<?php } ?>
     </section>
     <?php foreach($row as $trip) { ?>
    <div class="card">
  <img src="<?php echo htmlentities($trip['img']); ?>" class="image-resize"  alt="card image">
  
  
  <div class="class-body">
    <div class="card-titile"> <p><?php echo htmlentities($tourguide['Place']); ?></p>
      
<h2 class="card-text"><?php echo htmlentities($tourguide['Description']); ?></h2>
   
      <div> <span> <i class="fa fa-map-marker"></i><?php echo htmlentities($tourguide['City']); ?></span> 
     <span> <i class="fa fa-hourglass-end" aria-hidden="true"></i><?php echo htmlentities($tourguide['Duration']); ?></span>
       <span><i class="fa fa-money" aria-hidden="true"></i><?php echo htmlentities($tourguide['Price']); ?></span>
        </div></div></div>
</section >
<?php } ?>

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
