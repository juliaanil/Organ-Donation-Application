<?php 
	//error_reporting(0);
	session_start();
	require "db.php";
	

    if(!isset($_SESSION['userid'])) {
        header("location: logout.php");
    }
    $sql1="select * from user,organ where user.id='".$_GET['requestid']."' and user.id=organ.id"; 

     $result1=$db->query($sql1);
    if($result1->num_rows >0)
    { while($row1 =$result1->fetch_assoc())
    {      
        $bgroup=$row1['bgroup'];
        $sign=$row1['sign'];
        $kidney=$row1['kidney'];
        $liver=$row1['liver'];
        $lung=$row1['lung'];
        $pancreas=$row1['pancreas'];
        $intestine=$row1['intestine'];
        $cornea=$row1['cornea'];
        $heart=$row1['heart'];
        $skin=$row1['skin'];
        $bone=$row1['bone'];
        $status=$row1['status'];      
    }
}
	 if (  isset ( $_POST["update"]))
	  {
		  if($_POST["update"]=="Update")
            { 
              
             
            
              $sql = "UPDATE user,organ SET bgroup='".$_POST["bgroup"]."',sign='".$_POST["sign"]."',kidney='".$_POST["kidney"]."',liver='".$_POST["liver"]."',lung='".$_POST["lung"]."',pancreas='".$_POST["pancreas"]."',intestine='".$_POST["intestine"]."',cornea='".$_POST["cornea"]."',heart='".$_POST["heart"]."',skin='".$_POST["skin"]."',bone='".$_POST["bone"]."',status='".$_POST["status"]."' where user.id='".$_GET["requestid"]."'";
              
              if($db->query($sql) == TRUE)
			{ 
                ?> <script> alert("Donation details updated successfully!!"); 
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
<td  align="center"colspan="2"><width="550"><font color="green">Update Donation Details</font></td>  
</tr> 
    
      <tr>
        <td width="159">Blood group</td>
        <td width="218">
        <input type="text" autofocus name="bgroup" class="form-control"  required value="<?php echo $bgroup; ?>"/>
      </tr>
      <tr>
        <td width="159">Sign</td>
        <td width="218">
        <input type="text" autofocus name="sign" class="form-control"  required value="<?php echo $sign; ?>"/>
    </td>
      </tr>
      <tr>
      <tr>
        <td width="159">Kidney</td>
        <td width="218">
        <input type="text" autofocus name="kidney" class="form-control"  required value="<?php echo $kidney; ?>"/>
    </td>
      </tr>
      <tr>
        <td width="159">Liver</td>
        <td width="218">
        <input type="text" autofocus name="liver" class="form-control"  required value="<?php echo $liver; ?>"/>
    </td>
      </tr>
      <tr>
        <td width="159">Lung</td>
        <td width="218">
        <input type="text" autofocus name="lung" class="form-control"  required value="<?php echo $lung; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Pancreas</td>
        <td width="218">
        <input type="text" autofocus name="pancreas" class="form-control"  required value="<?php echo $pancreas; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Intestine</td>
        <td width="218">
        <input type="text" autofocus name="intestine" class="form-control"  required value="<?php echo $intestine; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Cornea</td>
        <td width="218">
        <input type="text" autofocus name="cornea" class="form-control"  required value="<?php echo $cornea; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Heart</td>
        <td width="218">
        <input type="text" autofocus name="heart" class="form-control"  required value="<?php echo $heart; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Skin</td>
        <td width="218">
        <input type="text" autofocus name="skin" class="form-control"  required value="<?php echo $skin; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Bone</td>
        <td width="218">
        <input type="text" autofocus name="bone" class="form-control"  required value="<?php echo $bone; ?>"/>
    </td>
      </tr> <tr>
        <td width="159">Status</td>
        <td width="218">
        <select name="status"><option value="available">available</option><option value="not available">not available</option>
        <!--<input type="text" autofocus name="status" class="form-control"  required value="<?php echo $status; ?>" />-->
    </td>
      </tr>
     
        <td colspan="2" align="center">
        <input type="submit" name="update" value="Update"/>
   
        </td>
      </tr>
    </table>
									

</body>

    

</html>
