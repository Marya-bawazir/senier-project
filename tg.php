<?php
session_start();
require 'int.php';


if (!isset($_SESSION['id']))
    header("Location: login.php");

  




$id=$_SESSION['id'];
$querypre=mysqli_query($conn,"SELECT * FROM tourguide where UserID=" .$_SESSION['id']) or die(mysqli_error($conn));

$row=mysqli_fetch_all($querypre, MYSQLI_ASSOC);



$query=mysqli_query($conn,"SELECT * FROM trip where UserID=" .$_SESSION['id']) or die(mysqli_error());

$row1=mysqli_fetch_all($query, MYSQLI_ASSOC);




$queryaf=mysqli_query($conn,"SELECT * FROM trip JOIN booktrip ON trip.ID = booktrip.ID And trip.UserID=" .$_SESSION['id']) or die(mysqli_error());

$row2=mysqli_fetch_all($queryaf, MYSQLI_ASSOC);



if(isset($_POST['delete'])){

  $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
  $sql = "DELETE FROM trip WHERE ID = $id_to_delete";
  if(mysqli_query($conn, $sql)){
   echo 'trip deleted successfully';
  }else{
    echo 'query error: ' . mysqli_error($conn);
  }
}


?>


<!DOCTYPE html>
<html>
   
 <head>   
   

<link rel="stylesheet" href="tourguide.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.css" integrity="sha512-Ty5JVU2Gi9x9IdqyHN0ykhPakXQuXgGY5ZzmhgZJapf3CpmQgbuhGxmI4tsc8YaXM+kibfrZ+CNX4fur14XNRg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.css" integrity="sha512-Ty5JVU2Gi9x9IdqyHN0ykhPakXQuXgGY5ZzmhgZJapf3CpmQgbuhGxmI4tsc8YaXM+kibfrZ+CNX4fur14XNRg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
   <div class="container">
   <div class ="logo"><p>Eye T👁 Kingdom</p>   

   
    </div> </div>
    
  </head>
  
  <body>
   <section class="feature">
<hr>
     
<h1>My Trips</h1>
<hr>
<?php foreach($row as $tourguide) { ?>
     <header class="header">
       <div class="user">
<img src="<?php echo htmlentities($tourguide['Profile_img']); ?>" class="card-img-top" alt="card image">
<h3>Tour Guide Profile</h3>
         <p><?php echo htmlentities($tourguide['First_name']); ?> <?php echo htmlentities($tourguide['Last_name']); ?></p>
        
 </div>
   <nav class="navbar">    
   <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Home &nbsp; &nbsp; </a>
     
     <a href="http://localhost/project/newtrip.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> &nbsp; add trip  &nbsp;</a>
   
    <a href="#Trips"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <?php echo htmlentities($tourguide['email']);?>&nbsp; &nbsp; </a>
    <a href="logout.php"> <i class= "fa fa-sign-out" aria-hidden= "true" ></i>&nbsp; Log out &nbsp; </a>
</header>
<?php } ?>
<div class="container-fluid mt-3">
 <div class="row"> 
 <?php foreach($row1 as $trip) { ?>
<div class="col-md-4">
<div class="card">
<img src="<?php echo htmlentities($trip['img']); ?>" class="card-img-top" alt="card image">
  

  <div class="class-body">
    <div class="card-titile"> <p> <?php echo ($trip['Place']); ?></p>
      
<h6 class="card-text"> <?php echo htmlentities($trip['Description']); ?></h6>
   
      <div> <span> <i class="fa fa-map-marker"></i><?php echo htmlentities($trip['City']); ?> </span> 
     <span> <i class="fa fa-hourglass-end" aria-hidden="true"></i> <?php echo htmlentities($trip['Duration']); ?></span>
       <span><i class="fa fa-money" aria-hidden="true"></i><?php echo htmlentities($trip['Price']); ?></span>
       <form action ="tg.php" method="POST" >
  <input type ="hidden" name="id_to_delete" value="<?php echo $trip['ID']?>">
  
  <input type ="submit" name="delete" value="Delete" class="btn brand" z-depth-0>

</form> 
       </div>
  </div>
  </div>
  </div>
  </div>
  <?php } ?>
  </div>
  </div>
  <br> 
  <h1>Booking information</h1>
  <div class="container-fluid mt-3">
 <div class="row"> 
 <?php foreach($row2 as $booktrip) { ?>
<div class="col-md-4">
<div class="card">

  <div class="class-body">
    <div class="card-titile"> <p> Book ID:<?php echo ($booktrip['ID']); ?> &nbsp; &nbsp; Place:<?php echo ($booktrip['Place']); ?></p>
      
<h6 class="card-text"> Tourist Name:&nbsp; &nbsp;<?php echo htmlentities($booktrip['FirstName']); ?> <?php echo htmlentities($booktrip['LastName']);?></h6>
<h6 class="card-text"> Email:<?php echo htmlentities($booktrip['Email']);?><br> Phone Number:<?php echo htmlentities($booktrip['MobileNumber']);?></h6>
     
     </div>
       </div>
       </div>
       </div>
       </div>
       <?php } ?>
       </div>
       </div>


 
</section>
     
  </body>
</html>