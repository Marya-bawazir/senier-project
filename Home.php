<?php
session_start();  
require 'header.php';
require 'int.php';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $city=$_POST['city'];
    $comment=$_POST['comment'];

    $sqlQuery="Insert Into coment (Name, City, Comment) value ('$name','$city','$comment')";

    if(mysqli_query($conn,$sqlQuery))
    {
      ?>
      <script>
      alert('your comment sent successfully!');
    
  
    </script>
    <?php
}
}  

?>


    
<?php

$sql= "SELECT * FROM Coment ";

// make query & get result
$result= mysqli_query($conn, $sql);

$row= mysqli_fetch_all($result, MYSQLI_ASSOC);





?>

<!DOCTYPE html>
<html>
 <head>   
   
 

<link rel="stylesheet" href="Home.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <meta> 
 <meta charset ="UTF-8> 
 <meta name="viewport" content"width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

 <nav class="menu">

  <form action="search.php" method="POST" class="search-form">  
     <input type="text" class="form-control" name="search" placeholder="Where do you want to go?">  
    <button type="submit" name="submit-search" class="input-group-text btn">Search </button> 
     </form> </div>
     

     
  </nav>

      <div class="form-search">
 



   
  
  </head>



   

 
 
   </div> 
 
  </head>
  
  <body>


   
  <section class="region">
    <h2>Regions <i class="fa fa-map-marker" aria-hidden="true"></i>

 
  <Div class="container">
    <Div class="row">
      <Div class="col-md-3"> 
    <Div class="region-box"> 
    <img  class="image-rezie" src="Central.jpeg" > 
    <a href="centralRegion.php"><p> Central Region</p></a> 
      </div>
  </div>
   &nbsp; &nbsp;&nbsp; &nbsp; 
      <Div class="col-md-3"> 
    <Div class="region-box"> 
    <img class="image-rezie" src="eastern.jpeg" > 
    <a href="EasternRegion.php"><p> Eastern Region</p></a> 
      </div>
  </div><br>
 &nbsp; &nbsp;&nbsp; &nbsp;   
      <Div class="col-md-3"> 
    <Div class="region-box"> 
    <img class="image-rezie" src="western.jpeg" > 
    <a href="WesternRegion.php"><p> Western Region</p></a> 
      </div>   <br>
  </div>
 
         &nbsp; &nbsp;&nbsp; &nbsp;  
      <Div class="col-md-3"> 
    <Div  class="region-box"> 
    <img class="image-rezie" src="north.jpeg" > 
    <a href="NorthRegion.php"><p> Northern Region</p></a> 
      </div>
  </div>
       &nbsp; &nbsp;&nbsp; &nbsp; 
        
      <Div class="col-md-3"> 
    <Div class="region-box"> 
    <img class="image-rezie" src="southern.jpeg" > 
    <a href="SouthernRegion.php"><p> southern Region</p></a> 
      </div>
  </div>
      

    
  </div>
  </div>
  </section> 
  <section class= "users-feedback">
  
<h2>User experience comments
 <i class="fa fa-comments" aria-hidden="true"></i></h2>
<form method="post"> 
    <Div class="container">
<Div class="row">
  
 
  

<?php foreach($row as $Coment){?>
    <Div class="col-md-4"> 
      
   
      <Div class="user-review">
        <p><?php echo ($Coment['Comment']);?></p>
        <i class="fa fa-comments" aria-hidden="true"></i>
  <h5> <?php echo ($Coment['Name']);?></h5>
        
        <small> <?php echo ($Coment['City']);?></small>
      </Div></Div>
      <?php } ?>
<Div class="col-md-4"> 
  <Div class="user-review">

    <p>good tour i will book it again</p>
    <i class="fa fa-comments" aria-hidden="true"></i>
<h5>Manar</h5>
    
    <small> Dammam</small>
  </Div></Div>

    
    </Div>
      </Div>

  



  
</section>
      
</section> 

<section class="thecomment" > 
<div class="container">
<h2>Add your comments <i class="fa fa-comments" aria-hidden="true"></i>
</h2>
<form>
  <div class="form-group">
    <label for="usr" class="sr-only"></label>
    <input type="text" name="name" class="form-control" placeholder="Enter your Name"  id="usr">
  </div>
  <div class="form-group">
    <label for="usr" class="sr-only"></label>
    <input type="text" name="city" class="form-control" placeholder="Enter your City"  id="usr">
  </div>

  <div class="form-group">
    <label for="comment"></label>
    <textarea class="form-control" name="comment" rows="5" placeholder=" What do you think of the services provided by our site? Was your trip enjoyable? Your opinion matters to us. Do you have any service that you wish we had?"
  id="comment"></textarea>
    &nbsp; &nbsp; 
    <button type="submit" name="submit" class="input-group-text btn">Submit</button>
  </div>
</form>

</div>
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
  <li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i>Contact us </a> </li>
  </ul> </div>
  
  </div></div></footer>
  </section>
      
  </body>
</html>