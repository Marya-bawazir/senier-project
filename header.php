<?php

?>
   <div class ="logo"><p>Eye T👁 Kingdom</p>
      <title>Home</title>
      <nav class="menu">
     <ul>
       
       
     <img src="logo.jpeg">
    
    <li> <a href="http://localhost/project/aboutus.php"> <i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
 <li><a href="http://localhost/project/contact%20us.php"><i class="fa fa-envelope" aria-hidden="true"></i>
Contact</a></li>

<?php if( isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>


<li> <a href="http://localhost/project/tg.php"> <i class="	fas fa-user" aria-hidden="true"></i><?php echo $_SESSION['id'];  ?></a></li>
      <li> <a href="logout.php"> <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>Logout</a></li> 
<?php }else{ ?>

  <li> <a href="Login.php"> <i class="glyphicon glyphicon-log-in" aria-hidden="true"></i> Login</a></li>
     <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>SignUp</a></li>
     
<?php } ?>
      
    <li> <a href="http://localhost/project/home.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    
 
     
   </ul>
      
     
   </ul>
   


  </nav>
  