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
       
        $contactname=$row1['cname'];
        $contactnumber=$row1['cno'];
        $contactmail=$row1['cmail'];
        $contactaddress=$row1['caddr'];
       
    }
}
	 if (  isset ( $_POST["update"]))
	  {
		  if($_POST["update"]=="Update")
              { 
		   
           
            
                $sql = "UPDATE user SET cname='".$_POST["contactname"]."',cno='".$_POST["contactnumber"]."',cmail='".$_POST["contactmail"]."',caddr='".$_POST["contactaddress"]."' where id='".$_GET["requestid"]."'";
			if($db->query($sql) == TRUE)
			{ 
                ?> <script> alert("Contact details updated successfully!!"); 
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
        <td width="159"> Contact Name</td>
        <td width="218">
        <input type="text" autofocus name="contactname" class="form-control" placeholder="Enter name" required value="<?php echo $contactname; ?>"/>
      </tr>
      <tr>
        <td width="159">Contact Number</td>
        <td width="218">
        <input type="number" autofocus name="contactnumber" class="form-control" placeholder="Enter phone number" required value="<?php echo $contactnumber; ?>"/>
    </td>
      </tr>
      <tr>
      <tr>
        <td width="159">Contact Email</td>
        <td width="218">
        <input type="text" autofocus name="contactmail" class="form-control" placeholder="Enter email id" required value="<?php echo $contactmail; ?>"/>
    </td>
      </tr>
      <tr>
        <td width="159">Contact Address</td>
        <td width="218">
        <input type="text" autofocus name="contactaddress" class="form-control" placeholder="Enter address" required value="<?php echo $contactaddress; ?>"/>
    </td>
      </tr>
     
        <td colspan="2" align="center">
        <input type="submit" name="update" value="Update"/>
   
        </td>
      </tr>
    </table>
									

</body>

    

</html>
