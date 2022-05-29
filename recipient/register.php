<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="styler.css" />
</head>
<body>
<?php
require "db.php";

// If form submitted, insert values into the database.
if (isset($_REQUEST['id'])){
        // removes backslashes
	
        $userid = stripslashes($_REQUEST['id']);
        $userid = mysqli_real_escape_string($con, $userid);

        $password = stripslashes($_REQUEST['pswd']);
        $password = mysqli_real_escape_string($con, $password);
       
        $patientname = stripslashes($_REQUEST['pname']);
        $patientname = mysqli_real_escape_string($con, $patientname);
        
        $patientage = stripslashes($_REQUEST['page']);
        $patientage = mysqli_real_escape_string($con, $patientage);
       
        $patientgender = stripslashes($_REQUEST['pgender']);
        $patientgender = mysqli_real_escape_string($con, $patientgender);
        
        $patientaddress = stripslashes($_REQUEST['paddr']);
        $patientaddress = mysqli_real_escape_string($con, $patientaddress);
        
        $bloodgroup = stripslashes($_REQUEST['bgroup']);
        $bloodgroup = mysqli_real_escape_string($con, $bloodgroup);
         
        $sign = stripslashes($_REQUEST['sign']);
        $sign = mysqli_real_escape_string($con, $sign);
         
        $contactname = stripslashes($_REQUEST['cname']);
        $contactname = mysqli_real_escape_string($con, $contactname);
       
        $contactnumber = stripslashes($_REQUEST['cno']);
        $contactnumber = mysqli_real_escape_string($con, $contactnumber);
      
        $contactemail = stripslashes($_REQUEST['cemail']);
        $contactemail = mysqli_real_escape_string($con, $contactemail);
       
        $contactaddress = stripslashes($_REQUEST['cddr']);
        $contactaddress = mysqli_real_escape_string($con, $contactaddress);
        
        $registrationtype = stripslashes($_REQUEST['type']);
        $registrationtype = mysqli_real_escape_string($con, $registrationtype);
        
       
        
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT into 'user' (id,pswd,pname,page,pgender,paddr,bgroup,sign,cname,cno,cemail,cddr,type)
                     VALUES ('$userid', '" . md5($password) . "', '$patientname', ' $patientage','$patientgender','$patientaddres','$bloodgroup','$sign','$contactname','$contactnumber','$contactemail','$contactaddress','$registrationtype')";
        $result   = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>


<div class="form">
    
<h1>Registration Form</h1>
        <input type="text" class="login-input" name="userid" placeholder="User ID" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="patientname" placeholder="Patient Name" required />
        <input type="number" class="login-input" name="patientage" placeholder="Patient Age" required />
        <input type="text" class="login-input" name="patientgender" value="Patient gender" required />
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
        <input type="text" class="login-radioinput" name="contactname" placeholder="Contact Name" required />
        <br>
        <br>
        <input type="number" class="login-input" name="contactnumber" placeholder="Contact Number" required />
        <input type="email" class="login-input" name="contactemail" placeholder="Contact Email Adress">
        <input type="text" class="login-input" name="contactaddress" placeholder="Contact Address" required />
        <input type="text" class="login-input" name="registrationtype" value="Registration type" required />
        <input type="radio" class="login-radioinput" name="registrationtype" value="donor" required /><label class="tc">donor</label>
        <input type="radio" class="login-radioinput" name="registrationtype" value="recipient" required /><label class="tc">recipient</label>
        <br>
        <br>
        <input type="submit" name="submit" value="Register" class="login-button" />
      
        <p class="link"><a href="index.php">Click to Login</a></p>
</form>
</div>
<?php } ?>
</body>
</html>