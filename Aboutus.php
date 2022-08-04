<?php
include 'int.php';

?>
<!DOCTYPE html>
<html>
 <head>   
   

 

  <link rel="stylesheet" href="aboutus.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 
 <div class ="logo"><p>Eye T👁 Kingdom</p>

 <title>About us</title>

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
</br>
<div>

    <div class="vision">We aspire to spread Saudi culture from various regions and 
      accentuate the beautiful tourist places that local residents offer to visitors.</div> <br><br>
      <div class="ti" > Our Sarvice </div>
      <div class="subS" > For Tourist </div>
</div>
<br>
<div class="Service"> 
<div class="rowS">
<div class="columnS">
<div class="cardS">
  <h3>Planned trips</h3> </br>
  <h4>  Offers planned trips to all regions in a unique and more beautiful way by the local tour guide.</h4>
</div>
</div> 

<div class="columnS">
<div class="cardS">
  <h3> A completed plan </h3>  </br>
  <h4>  Includes all the information about the trip path, type, dates and days, duration, price and target. </h4>
</div>
</div>

<div class="columnS">
<div class="cardS">
  <h3>   Browsing &  Booking     </h3> </br>
  <h4>  The possibility of browsing for all trips and then booking easily. </h4>
</div>
</div>
</div>
</br>
<div class="rowS">
<div class="columnS">
<div class="cardS">
  <h3>  Communication     </h3> </br>
  <h4>  Tour guide information is available to communicate on all own planned trips    </h4>
</div>
</div>

<div class="columnS">
<div class="cardS">
  <h3>  Financial transaction</h3> </br>
  <h4> Financial transactions can be paid when meeting the tour guide.</h4>
</div>
</div>

<div class="columnS">
<div class="cardS">
  <h3>No registration </h3>  </br>
  <h4> Just select the trip and book it by entering your name,
       phone number and email only without  register on website</h4>
</div>
</div>
</div> </div>
</br>


<div class="subS" > For Local Tour Guide </div>>
<div class="Service"> 
<div class="rowS">
<div class="columnS">
  <div class="cardS">
    <h3>  Job opportunity </h3> </br>
    <h4>   Good job opportunity for locals who want to highlight the beauty and authenticity of their city. </h4>
  </div>
</div>

  <div class="columnS">
  <div class="cardS">
    <h3>  Ease of setup</h3> </br>
    <h4>  Enter the information about the trip you want to organize, it will present to tourists in an attractive way.</h4>
  </div>
</div>

  <div class="columnS">
  <div class="cardS">
    <h3>Financial return </h3>  </br>
    <h4> We guarantee for you that the financial return  from the trip will be 100%.  </h4>
  </div>
</div>
</div>
</div>
</div>
    






    <br><br>
  
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
<li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact us  </a> </li>      </ul> </div>
      
      </div></div></footer>
      </section>
        
    </body>
    </html>