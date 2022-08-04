<?php
require 'int.php';
require 'header1.php';


$today = date("Y-m-d");
 
$sqlpre = " UPDATE trip 
SET Status = 0 

WHERE Status = 1 AND Date < CURDATE()";
$result2 = mysqli_query($conn, $sqlpre);

$sql = "SELECT * FROM trip Where region = 'Northern Region'";
$result = mysqli_query($conn, $sql);

$row=mysqli_fetch_all($result, MYSQLI_ASSOC);
   
?>



<!DOCTYPE html>
<html>
 <head>   
   

 <link rel="stylesheet" href="region.css">

 
  
 <nav class="menu">

  <form action="search.php" method="POST" class="search-form">  
     <input type="text" class="form-control" name="search" placeholder="Where do you want to go?">  
    <button type="submit" name="submit-search" class="input-group-text btn">Search </button> 
     </form> </div>
     

     
  </nav>


</head>

  
  
  <body>
     
     
<hr><br>
  <section class="region">
    <p>North Region </p>
    
<div class="container-fluid mt-3">
<div class="row"> 
     
     
<?php foreach($row as $trip) { 
      if($trip['Status']!=0)
      {
        
      
    
    ?>
<div class="col-md-4">
<div class="card">

<img src ="<?php echo ($trip['img']);?>" class="card-img"> 
  <div class="class-body">
    <div class="card-titile"> 
        <p><?php echo ($trip['Place']);?></p>
      
<h6 class="card-text"><?php echo ($trip['Description']);?></h6>
   
      <div> <span> <i class="fa fa-map-marker"></i><?php echo ($trip['City']);?> </span> 
     <span> <i class="fa fa-hourglass-end" aria-hidden="true"></i> <?php echo ($trip['Duration']);?></span>
       <span><i class="fa fa-money" aria-hidden="true"></i><?php echo ($trip['Price']);?></span> <br>
       <span><i class="fa fa-users" aria-hidden="true"></i><?php echo ($trip['Target']);?></span> <br>
       <span><i class="fa fa-bus" aria-hidden="true"></i><?php echo ($trip['Type']);?></span> <br>
       <span><i class="	far fa-calendar-alt" aria-hidden="true"></i><?php echo ($trip['Date']);?></span> 
       <span><i class="	far fa-clock" aria-hidden="true"></i><?php echo ($trip['Time']);?></span> <br><br><br>
       <a href="tripdetail.php?id=<?=$trip['ID']?>" class="ClickBut">more details</a> 


  
    </div>
  </div>
  </div>
  </div>
  </div>
      
      <?php } }?>



    </div>
  </div>

    <br>  
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