<?php
require 'int.php';




if(isset($_POST['submit-search'])) {
$search = mysqli_real_escape_string($conn, $_POST['search']);
$sql = "SELECT * FROM trip WHERE Region LIKE '%$search%' OR City LIKE '%$search%' OR Place LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0) {



?>

<!DOCTYPE html>
<html>
<head>   
   

<link rel="stylesheet" href="region.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

 <div class ="logo"><p>Eye T👁 Kingdom</p>

</div>
<title>Central </title>

   <div class= "form-search"> </div>
</nav>
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
     
     
<hr><br>
  <section class="region">
    <p> Search result </p>
    
<div class="container-fluid mt-3">
<div class="row"> 
     
    
<?php while($row = mysqli_fetch_assoc($result)){?>
     
        
      
   
<div class="col-md-4">
<div class="card">

<img src ="<?php echo ($row['img']);?>" class="card-img"> 
  <div class="class-body">
    <div class="card-titile"> 
        <p><?php echo ($row['Place']);?></p>
      
<h6 class="card-text"><?php echo ($row['Description']);?></h6>
   
      <div> <span> <i class="fa fa-map-marker"></i><?php echo ($row['City']);?> </span> 
     <span> <i class="fa fa-hourglass-end" aria-hidden="true"></i> <?php echo ($row['Duration']);?></span>
       <span><i class="fa fa-money" aria-hidden="true"></i><?php echo ($row['Price']);?></span> <br>
       <span><i class="	far fa-calendar-alt" aria-hidden="true"></i><?php echo ($row['Date']);?></span> 
       <span><i class="	far fa-clock" aria-hidden="true"></i><?php echo ($row['Time']);?></span> <br><br><br>
       <a href="tripdetail.php?id=<?=$row['ID']?>" class="ClickBut">more details</a> 


  
    </div>
  </div>
  </div>
  </div>
  </div>
   
      <?php }}
    
    else {

      echo "There are no results matching your search!";
  }
    
    }?>



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