<?php
require 'int.php';
session_start();

if(isset($_POST['submit'])){
     $ID=$_POST['ID'];
     $FirstName=$_POST['FirstName'];
     $lastname=$_POST['LastName'];
     $Gender=$_POST['Gender'];
     $Birth=$_POST['Birth'];
     $languages=$_POST['languages'];
     $Education=$_POST['Education'];
     $City=$_POST['City'];
     $mobile=$_POST['MoblieNumber'];
     $email=$_POST['email'];
     $image=$_POST['image'];
     $password=$_POST['Password'];
     $cpassword=$_POST['CPassword'];

    $sqlQuery="Insert Into tourguide (UserID,First_name,Last_name,Gender,Date_of_Birth,Languages,Education,City,Mobile_Number,email,Profile_img,Password,Confirm) VALUE 
    ('$ID','$FirstName','$lastname','$Gender','$Birth','$languages','$Education','$City','$mobile','$email','$image','$password','$cpassword')";
    
    if(mysqli_query($conn,$sqlQuery))
    {
      ?>
      <script>
        alert('You have successfully signed up ');
        document.location='Login.php'
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
 
 <script> 
  function validate(){

var a = document.getElementById("pass1").value;
var b = document.getElementById("pass2").value;






if (a!==b) {

  document.getElementById("NotMatch").innerHTML="Passwords Do not match";

   return false;
}


return true; 
}

</script>
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
  <body>

<section class = "MainBox" >
<div class="title" > Sign up as a tour guide </div>
<form method="post" onSubmit="return validate();">
<div class="Form">




<div class=" inputText"> <span class="sub"> First name  &nbsp; &nbsp; &nbsp; &nbsp;  </span>
<input type="text" name="FirstName" pattern="([A-Za-z\s]){1,20}"  required class="InputFieldOne" > </div> 

<div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;  Last name  </span>
<input type="text" name="LastName" pattern="([A-Za-z\s]){1,20}" required  class="InputFieldOne" > </div>

<div class=" inputText"> <span class="sub"> National Identity </span>
<input type="number" name="ID" pattern="([A-Za-z\s]){1,20}" required  class="InputFieldOne"  > </div> 

<div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;   City  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;   </span>
<input type="text" id="City" name="City" pattern="([A-Za-z\s]){1,20}" title="Examlpe: Dammam " required  class="InputFieldOne"  > </div>

<div class= "inputChoice"  > <span class="sub" > Gender </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <td><input type="radio" id="Male" name="Gender" value="Male" class="ChoiceField" required/> &nbsp; Male </td>  &nbsp;
 <td><input type="radio" id="female" name="Gender" value="female" class="ChoiceField" /> &nbsp; female </td> &nbsp;
</div>

<div class="inputDate" > <span class="sub">  Date of Birth </span>
<input type="date" name="Birth" max="<?php echo date("Y-m-d"); ?> required  class="InputFieldTwo" > </div> <br>

<div class=" inputText"> <span class="sub">  Education   &nbsp; &nbsp; &nbsp; &nbsp;  </span>
<input type="text" name="Education" pattern="([A-Za-z\s]){1,30}" title="Example: Bachelors " required class="InputFieldOne"  > </div> 

<div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;  languages </span>
<input type="text" name="languages"pattern= "[A-Za-z\s]{1,50}+[A-Za-z\s]{1,50}+" title=" ( Arabic English ..  )   only letters accepted"  required  class="InputFieldOne"  > </div>

<div class=" inputText"> <span class="sub">  Moblie number  </span>
<input type="tel" name="MoblieNumber" pattern="[0-9].{9,15}" title="Example: 05xxxxxxxx" required  class="InputFieldOne" > </div> 
 
<div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;  Email &nbsp;&nbsp;&nbsp; </span>
<input type="email" name="email" pattern= "(?![_.-])((?![_.-][_.-])[\w.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}"
title=" Invalid email"
 required class="InputFieldOne"  > </div>  


<div class="imageUpload">
<span class="sub" >  Upload your profile image </span>
<input type="file" name="image" accept="image/*" required > 
</div> <br>
 
<div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;  Password &nbsp;&nbsp;&nbsp; </span>
  <input type="password" name="Password" class="InputFieldOne" id= "pass1" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}" 
        title="Must contain at least one number and one uppercase and one lowercase letter, one symbol, and at least 8 or more characters." required
  > </div>  
  <br><br>
  <div class=" inputText"> <span class="sub">  &nbsp; &nbsp; &nbsp; &nbsp;  Confirm Password &nbsp;&nbsp;&nbsp; </span>
  <input type="password" name="CPassword"  id= "pass2"  class="InputFieldOne" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}" 
title="Must contain at least one number and one uppercase and one lowercase letter, one symbol, and at least 8 or more characters."
    required >
 </div>  
 <div id="NotMatch" class="NotMatch"> </div>
  <br><br>
<div >
<input type="submit" name="submit" class="ClickBut" id="Button"

> &nbsp; &nbsp;  <input type="reset" class="ClickBut"
 >
 </div>
  </div>
</form>
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