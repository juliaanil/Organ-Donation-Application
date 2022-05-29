<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>
<link rel="stylesheet" href="styler.css" />
<?php
session_start();
require "db.php";
	
    if(isset($_SESSION['userid'])) {
        header("location: profile.php");
    }

/*If form submitted, insert values into the database.
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   echo "<script>alert('Register button clicked')</script>";*/
   
   
/*if (  isset ( $_POST["submit"]))
{
   ?><script> alert("Register button clicked"); </script><?php
   
    if($_POST["submit"]=="Register")
    { 
       if($_POST["userid"]!=" ")*/
       if (  isset ( $_POST["submit"]))
       {
           if($_POST["submit"]=="submit")
               { 
            
    
       ?><script> alert("Register button clicked"); </script><?php
      $sql = "INSERT INTO user (id,pswd,pname,page,pgender,paddr,bgroup,sign,cname,cno,cmail,caddr,type) VALUES ('".$_POST["userid"]."','".$_POST["password"]."','".$_POST["patientname"]."','".$_POST["patientage"]."','".$_POST["patientgender"]."','".$_POST["patientaddress"]."','".$_POST["bloodgroup"]."','".$_POST["sign"]."','".$_POST["contactname"]."','".$_POST["contactnumber"]."','".$_POST["contactemail"]."','".$_POST["contactaddress"]."','".$_POST["registrationtype"]."')";
      if($db->query($sql) == TRUE)
      { ?> <script> alert("Patient details added successfully!!"); </script><?php
      }
      else
      {
         ?> <script> alert("Error!!"); </script><?php
          echo " ".$db->error;}}else { ?> <script> alert("Patient name is empty!! "); </script><?php } }
     
      ?> 
  

<div class="form">
    
<h1>Registration Form</h1>
        <input type="text" class="login-input" name="userid" placeholder="User ID" />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="patientname" placeholder="Patient Name"  />
        <input type="number" class="login-input" name="patientage" placeholder="Patient Age" />
        <!--<input type="text" class="login-input" name="patientgender" value="Patient gender" required />
        <input type="radio" class="login-radioinput" name="patientgender" value="male" required /><label class="tc">male</label>
        <input type="radio" class="login-radioinput" name="patientgender" value="female" required /><label class="tc">female</label>
        <input type="radio" class="login-radioinput" name="patientgender" value="others" required /><label class="tc">others</label>
        <br>
        <br>
        <input type="text" class="login-input" name="patientaddress" placeholder="Patient Address" required />
        <input type="text" class="login-input" name="bloodgroup" placeholder="Blood group" required />
        <input type="text" class="login-input" name="sign" value="Sign" required />
        <input type="radio" class="login-radioinput" name="sign" value="positive" required /><label class="tc">positive</label>
        <input type="radio" class="login-radioinput" name="sign" value="negative" required /><label class="tc">negative</label>
        <br>
       <br>
        <input type="text" class="login-input" name="organs" value="Organs" required />
        <input type="checkbox" class="login-checkinput" name="organs" value="kidney"/><label class="tc">kidney</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="liver"/><label class="tc">liver</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="lung"/><label class="tc">lung</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="pancreas"/><label class="tc">pancreas</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="intestine"/><label class="tc">intestine</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="cornea"/><label class="tc">cornea</label>
        <input type="checkbox" class="login-checkinput" name="heart" value="liver"/><label class="tc">heart</label>
        <input type="checkbox" class="login-checkinput" name="skin" value="liver"/><label class="tc">skin</label>
        <input type="checkbox" class="login-checkinput" name="bone" value="liver"/><label class="tc">bone</label>
        
        <br>
        <br>
        
        <input type="text" class="login-input" name="contactname" placeholder="Contact Name" required />
        <br>
        <br>
        <input type="number" class="login-input" name="contactnumber" placeholder="Contact Number" required />
        <input type="email" class="login-input" name="contactemail" placeholder="Contact Email Adress">
        <input type="text" class="login-input" name="contactaddress" placeholder="Contact Address" required />
        <input type="text" class="login-input" name="registrationtype" value="Registration type" required />
        <input type="radio" class="login-radioinput" name="registrationtype" value="donor" required /><label class="tc">donor</label>
        <input type="radio" class="login-radioinput" name="registrationtype" onclick=""    value="recipient" required /><label class="tc">recipient</label>
        <br> </br>
        <br>
         <input type="submit" name="submit" value="submit" class="btn btn-info btn-fill pull-right" style="background: pink; border-color: #000000;color: black;" />
        <input type="submit" name="submit" value="Login" class="btn btn-info btn-fill pull-right" style="background: pink; border-color: #000000;color: black;" />
        <input type="submit" name="submit" value="Register" class="login-button" />-->
        
        <input type="submit" name="submit" value="submit" />

		<div class="clearfix"></div>
       
        <p class="link"><a href="index.php">Click to Login</a></p>
</form>
</div>

</body>
</html>