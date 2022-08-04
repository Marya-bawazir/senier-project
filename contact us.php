<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="contact us.css"> 
 <link rel="stylesheet" href="form new trip.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class ="logo"><p>Eye T👁 Kingdom</p>


      <title>Contact us</title>
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
   <script> 
    function validate() {
    var input =  document.getElementById (' message ').value ;  
    var button = document.getElementById("Button");
    var regExp =  "[A-Za-z0-9.,-:]{5,600}"  ;
    var match = input.match(regExp);
    if (match){
        return true;
    }else{
        alert(" Message field: only Letters, Numbers and Special characters{  . , -  :  }are accepted");
        document.getElementById("Button").disabled = true; 
        return false;
    }
}
    </script>


      <title>Contact us</title>
  <nav class="menu">
     
  </nav>
  
</head>
<body>
<section class = "MainBox" >
<div class="title" > Contact us </div>
<div class="container">
  <form action="https://formspree.io/f/xdobwppg" method="POST" id="my-form">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" pattern="([A-Za-z\s]){1,20}" title="only letters accepted"  required placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" pattern="([A-Za-z\s]){1,20}" title="only letters accepted"  required placeholder="Your last name..">

   
  
      <label for="email"> E-mail</label>
  <input type="email" id="email" name="email" pattern= "(?![_.-])((?![_.-][_.-])[\w.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}"
title=" Invalid email"
 required placeholder="Enter your email..">
    
    </select>

    <label for="subject">Your Message</label>
    <textarea id="subject" name="subject" id="message" onblur="return validate();" required placeholder="Type your message here.." style="height:200px"></textarea>


    <input type="submit" value="Submit" id="Button">
  </form>

</div>
       <div id="status" >  </div> 

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
<li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact us</a> </li>
</ul> </div>

</div></div></footer>
</section>
  

</body>
</html>
