<?php 
	//error_reporting(0);
	session_start();
	require "db.php";
	

    if(!isset($_SESSION['userid'])) {
        header("location: logout.php");
    }
	$sql1="select * from user where id='".$_GET['requestid']."'";
     $result1=$db->query($sql1);
    if($result1->num_rows >0)
    { while($row1 =$result1->fetch_assoc())
    {
       
        $patientname=$row1['pname'];
        $patientage=$row1['page'];
        $patientgender=$row1['pgender'];
        $patientaddress=$row1['paddr'];
       
    }
}
	 if (  isset ( $_POST["update"]))
	  {
		  if($_POST["update"]=="Update")
              { 
		   
           
            
                $sql = "UPDATE user SET pname='".$_POST["patientname"]."',page='".$_POST["patientage"]."',pgender='".$_POST["patientgender"]."',paddr='".$_POST["patientaddress"]."' where id='".$_GET["requestid"]."'";
			if($db->query($sql) == TRUE)
			{ 
                ?> <script> alert("Patient updated successfully!!"); 
            window.location.href="profile.php";
            </script><?php
			}
			else
			{ 
                ?> <script> alert("Error!!"); </script><?php
            echo " ".$db->error; 
           } 
            
		    
         
            
            }}
?>
<!doctype html>
<html lang="en">
<head>
	

	<title>Donor</title>
    <style>
input,textarea{width:300px,height:300px}

input[type=submit]{width:10px , height: 60px, bgcolor="blue"}
</style>
	
	
</head>
<body>


  


    	

    
                                <form method="post"  enctype="multipart/form-data">
                                    
                                
                                <table width="500" height="400" align="center" border="20" bgcolor="yellow" font color="black">
<tr>    
<td  align="center"colspan="2"><width="550"><font color="green">Update Patient Details</font></td>  
</tr> 
    <tr>
        <td width="159"> Patient Name</td>
        <td width="218">
        <input type="text" autofocus name="patientname" class="form-control" placeholder="Enter name" required value="<?php echo $patientname; ?>"/>
      </tr>
      <tr>
        <td width="159">Patient Age</td>
        <td width="218">
        <input type="number" autofocus name="patientage" class="form-control" placeholder="Enter age" required value="<?php echo $patientage; ?>"/>
    </td>
      </tr>
      <tr>
      <tr>
        <td width="159">Patient Gender</td>
        <td width="218">
        <input type="text" autofocus name="patientgender" class="form-control" placeholder="Enter gender" required value="<?php echo $patientgender; ?>"/>
    </td>
      </tr>
      <tr>
        <td width="159">Patient Address</td>
        <td width="218">
        <input type="text" autofocus name="patientaddress" class="form-control" placeholder="Enter address" required value="<?php echo $patientaddress; ?>"/>
    </td>
      </tr>
     
        <td colspan="2" align="center">
        <input type="submit" name="update" value="Update"/>
   
        </td>
      </tr>
    </table>
									

</body>

    

</html>
