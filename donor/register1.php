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
          /* if($_POST["submit"]=="Register")
               { */
            
    
       ?><script> alert("Register button clicked"); </script><?php
     
       $sql1 = "INSERT INTO user (id,pswd,pname,page,pgender,paddr,bgroup,sign,cname,cno,cmail,caddr,type) VALUES ('".$_POST["userid"]."','".$_POST["password"]."','".$_POST["patientname"]."','".$_POST["patientage"]."','".$_POST["patientgender"]."','".$_POST["patientaddress"]."','".$_POST["bloodgroup"]."','".$_POST["sign"]."','".$_POST["contactname"]."','".$_POST["contactnumber"]."','".$_POST["contactemail"]."','".$_POST["contactaddress"]."','".$_POST["registrationtype"]."')";
       $sql2 = "INSERT INTO organ (id,kidney,liver,lung,pancreas,intestine,cornea,heart,skin,bone,status) VALUES ('".$_POST["userid"]."','".$_POST["kidney"]."','".$_POST["liver"]."','".$_POST["lung"]."','".$_POST["pancreas"]."','".$_POST["intestine"]."','".$_POST["cornea"]."','".$_POST["heart"]."','".$_POST["skin"]."','".$_POST["bone"]."','".$_POST["currentstatus"]."')";
           if($db->query($sql1) == TRUE)
            { ?> <script> alert("Donor/Recipient details added successfully!!"); </script><?php
            }
          else
           {
         ?> <script> alert("Error in adding Donor/Recipient details !!"); </script><?php
          echo " ".$db->error;
           }
           if($db->query($sql2) == TRUE)
            { ?> <script> alert("Donation details added successfully!!"); </script><?php
            }
          else
           {
         ?> <script> alert("Error in adding donation details !!"); </script><?php
          echo " ".$db->error;
           }
      }
      else 
      { 
          ?> <script> alert("Error "); </script><?php 
      } 
     
      ?> 
  
<form method="POST">
<div class="form">
    
<h1>Registration Form</h1>
        <input type="text" class="login-input" name="userid" placeholder="Username" />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="patientname" placeholder="Donor/Recipient Name"  />
        <input type="number" class="login-input" name="patientage" placeholder="Donor/Recipient Age" />
        <input type="text" class="login-input" name="patientgender" value="Donor/Recipient gender" required />
        <input type="radio" class="login-radioinput" name="patientgender" value="male" required /><label class="tc">male</label>
        <input type="radio" class="login-radioinput" name="patientgender" value="female" required /><label class="tc">female</label>
        <input type="radio" class="login-radioinput" name="patientgender" value="others" required /><label class="tc">others</label>
        <br>
        <br>
        <input type="text" class="login-input" name="patientaddress" placeholder="Donor/Recipient Address" required />
        <input type="text" class="login-input" name="bloodgroup" placeholder="Blood group" required />
        <input type="text" class="login-input" name="sign" value="Sign" required />
        <input type="radio" class="login-radioinput" name="sign" value="positive" required /><label class="tc">positive</label>
        <input type="radio" class="login-radioinput" name="sign" value="negative" required /><label class="tc">negative</label>
        <br>
       <br>
       <input type="text" class="login-input" name="kidney" value="Kidney" required />
        <input type="radio" class="login-radioinput" name="kidney" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="kidney" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="liver" value="Liver" required />
        <input type="radio" class="login-radioinput" name="liver" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="liver" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="lung" value="Lung" required />
        <input type="radio" class="login-radioinput" name="lung" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="lung" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="pancreas" value="Pancreas" required />
        <input type="radio" class="login-radioinput" name="pancreas" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="pancreas" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="intestine" value="Intestine" required />
        <input type="radio" class="login-radioinput" name="intestine" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="intestine" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="cornea" value="Cornea" required />
        <input type="radio" class="login-radioinput" name="cornea" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="cornea" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="heart" value="Heart" required />
        <input type="radio" class="login-radioinput" name="heart" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="heart" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="skin" value="Skin" required />
        <input type="radio" class="login-radioinput" name="skin" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="skin" value="no" required /><label class="tc">no</label>
       <br>
       <br>
       <input type="text" class="login-input" name="bone" value="Bone" required />
        <input type="radio" class="login-radioinput" name="bone" value="yes" required /><label class="tc">yes</label>
        <input type="radio" class="login-radioinput" name="bone" value="no" required /><label class="tc">no</label>
       <br>
        <!--- <input type="text" class="login-input" name="organs" value="Organs" required />
        <input type="checkbox" class="login-checkinput" name="organs" value="kidney"/><label class="tc">kidney</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="liver"/><label class="tc">liver</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="lung"/><label class="tc">lung</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="pancreas"/><label class="tc">pancreas</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="intestine"/><label class="tc">intestine</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="cornea"/><label class="tc">cornea</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="liver"/><label class="tc">heart</label>
        <input type="checkbox" class="login-checkinput" name="organs" value="liver"/><label class="tc">skin</label>
        <input type="checkbox" class="login-checkinput" name="organs
        " value="liver"/><label class="tc">bone</label>--->
        
       
        <br>
        <input type="text" class="login-input" name="currentstatus" value="Current status" required />
        <input type="radio" class="login-radioinput" name="currentstatus" value="available" required /><label class="tc">available</label>
        <input type="radio" class="login-radioinput" name="currentstatus" value="not available" required /><label class="tc">not available</label>
        <br><br>
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
         
        <input type="submit" name="submit" value="Register" class="login-button" />
        
   

		<div class="clearfix"></div>
       
        <p class="link"><a href="index.php">Click to Login</a></p>
</form>
</div>

</body>
</html>