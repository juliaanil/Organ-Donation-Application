<?php 
	
	session_start();
	require "db.php";
	
    if(isset($_SESSION['userid'])) {
        header("location: profile.php");
    }
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo "<script>alert('login clicked')</script>";
		
		if(isset($_POST['submit'])) {

			
			$uid = $_POST['userid'];
			$pass = $_POST['password'];
			
			if($uid != "" && $pass != "") {
				
				$verify = $db->query("SELECT * FROM user WHERE id='$uid' AND pswd='$pass' LIMIT 1");
				$r="SELECT * FROM user WHERE id='$uid' AND pswd='$pass' LIMIT 1";
				echo $r;
				if($verify->num_rows) {
					
					$row = $verify->fetch_assoc();
					$_SESSION['userid']=$row["id"];
					$_SESSION['password']=$row["pswd"];
					$_SESSION['patientname']=$row['pname'];
					$_SESSION['bloodgroup']=$row['bgroup'];
					$_SESSION['groupsign']=$row['sign'];
					$_SESSION['registrationtype']=$row['type'];
					
					
                    header("location:profile.php");
					
					//echo "LOGGED IN";
					
				}else{
					
					echo "<script>alert('Invalid login credentials. Please try again')</script>";
					
				}
				
			}else{
				
				echo "<script>alert('Some fields are empty. All fields required!')</script>";
				
			}
			
		}
		
	}
	
?>

<!doctype html>
<html lang="en">
<head>


	<title>Donor</title> 
	<link rel="stylesheet" href="style.css">
	


    
</head>
<body>

<div class="login_wrapper">
	
	<div class="login_holder">
		
		<form method="post" action="index.php">
			
			<div class="header">
				<h1 style="border-bottom: 1px solid #FFFFFF,text-align:center;" class="title">Donor Login</h1>
			</div>
			
			<div class="form-group" method="post" action="#">
			<p class="oblique"><label>User ID</label></p>
			
  
	
			<input type="text" name="userid" class="form-control" placeholder="Enter your user id" autofocus>
			</div>
			
			<div class="form-group">
			<p class="oblique"><label>Password</label></p>
				<input type="password" name="password" class="form-control" placeholder="Enter your password">
			</div>
			
			<p><a style="color: blue;" href="register1.php">No account yet! Click Here to register</a></p>
			
			<input type="submit" name="submit" value="Login" class="btn btn-info btn-fill pull-right" style="background: pink; border-color: #000000;color: black;" />
			<div class="clearfix"></div>
			
		</form>
	
	</div>
	
</div>

</body>

</html>