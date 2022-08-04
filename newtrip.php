
    <?php

session_start();  
require 'int.php';

if (!isset($_SESSION['id']))
    header("Location: login.php");


if(isset($_POST['submit'])){
    $id=$_SESSION['id'];
    $Region=$_POST['Region'];
    $city=$_POST['City'];
    $type=$_POST['Type'];
    $place=$_POST['Place'];
    $price=$_POST['Price'];
    $disc=$_POST['Description'];
    $target=$_POST['Target'];
    $dura=$_POST['Duration'];
    $image=$_POST['img'];
  $date=$_POST['date'];
    $time=$_POST['time'];  

    
      
          


    $sqlQuery="Insert Into trip (UserID, Region,City,Description,Target,Duration,Type,Place,Price,Date,img,Time,Status) value
     ('$id','$Region','$city','$disc','$target','$dura','$type','$place','$price','$date','$image','$time','1')";
    if(mysqli_query($conn,$sqlQuery))
    {
        ?>
        <script>
          alert('Trip Saved Successfully ');
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
   
  
      <title>new trip</title>
      <nav class="menu">
     
   


  </nav>

  <script> 
    function validate() {
    var input =  document.getElementById ('Description').value ;  
    var button = document.getElementById("Button");
    var regExp =  "[A-Za-z0-9.,-:]{5,600}"  ;
    var match = input.match(regExp);
    if (match){
        return true;
    }else{
        alert("Description field: only Letters, Numbers and Special characters{  . , -  :  }are accepted");
        document.getElementById("Button").disabled = true; 
        return false;
    }
}
    </script>

  
  </head>
  <body>

<section class = "MainBox" >
<div class="title" > Add your new trip information </div>
<form method="post"> 
<div class="Form">
  

<div class= "inputChoice" > <span class="sub" > Region  </span> 
  <td><input type="radio" name="Region" value="Central Region" required />&nbsp; Central Region </td>  &nbsp;
   <td>
   
    
  </td>  
 
  <td><input type="radio" name="Region" value="Western Region" class="ChoiceField" /> &nbsp;Western Region </td> &nbsp;

   <td><input type="radio" name="Region" value="Eastern Region " class="ChoiceField" />&nbsp; Eastern Region </td> &nbsp;
  
    <td><input type="radio" name="Region" value="Southern Region " class="ChoiceField" />&nbsp; Southern Region </td> &nbsp;

   <td><input type="radio" name="Region" value="Northern Region " class="ChoiceField" /> &nbsp;Northern Region </td> &nbsp;

 
   
 </div>
  
 
<div class=" inputText">
<span class="sub" > City &nbsp;&nbsp; </span>
<input type="text" name="City" pattern="[A-Za-z].{2,20}" title="Example: Dammam"
  required  class="InputFieldOne" > 
</div>

<div class=" inputText">
<span class="sub" > Place &nbsp;&nbsp; </span>
<input type="text" name="Place" pattern="[a-zA-Z0-9]+[a-zA-Z0-9]+" title="Example: Rose garden"
 required  class="InputFieldOne" > 
</div>

<div class=" inputText">
&nbsp;<span class="sub" > Type </span>
<input type="text" name="Type" pattern="[A-Za-z].{2,20}" title="Example: adventure"
 required class="InputFieldOne" > 
</div>

<div class=" inputText">
<span class="sub">Price </span>
<input type="text" name="Price" pattern="[0-9]{1,4}[ ](SR|sr)"   title="Example: 150 SR"
 required class="InputFieldTwo" 
 > 
</div>

<div class= "inputChoice" > <span class="sub" > Target </span>
  <input type="radio"  name="Target"  value="families" class="ChoiceField" >
  <label for= "families" required> Families </label>  &nbsp;
  <input type="radio"  name="Target" value="Individuals" class="ChoiceField" >
  <label for="Individuals"> Individuals </label>  &nbsp;
<input type="radio"  name="Target" value="Individuals and Families" class="ChoiceField" >
  <label for="Individuals and Families"> Individuals and Families </label> </div> &nbsp;

<div class=" inputArea"> <span class="sub"> Description </span>
<div class="Box"> <textarea type="text" rows="4" cols="100" id="Description" name="Description"    
pattern="[A-Za-z] (?=.*[.,()-:]).{,600}" 
  title=" only letters and special characters{  . , ( ) -  :  }are accepted" placeholder="description of what is the trip path like What is the starting point and meeting, what are the activities that will be carried out, any instructions and notes will be written here " 
required


></textarea></div>  </div>   



<div class=" inputDate"> 
<span  class="sub" > Date </span> 
<input type="date" name="date" min="<?php echo date("Y-m-d"); ?>"
 required  class="InputFieldTwo" >  </div>&nbsp;&nbsp;&nbsp;
  
<div class=" inputDate">  
<span  class="sub" > Time </span> 
<input type="time" name="time" required  class="InputFieldTwo" >  </div>
  
<div class="inputDate" >
&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span  class="sub" > Duration </span>
<input type="text" name="Duration" pattern="[0-9]{1,2}[ ](HRS|hrs|hr|hour|hours)"   title="Example:  2 hrs
" required class="InputFieldTwo"  > 
  </div>
  
 

 
<div class="imageUpload">
<span class="sub" >  Upload an image of the trip </span>
<input type="file" name="img" accept="image/*" value="img" required > 
</div>

<div >
<input type="submit" name="submit" id="Button" class="ClickBut"> &nbsp; &nbsp;  <input type="reset" class="ClickBut" >
 </div>
  </div>
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
<li> <a href="http://localhost/project/contact%20us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact us </a> </li>
</ul> </div>

</div></div></footer>
</section>
    
</body>
</html>