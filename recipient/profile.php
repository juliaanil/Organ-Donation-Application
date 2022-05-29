<?php 

	session_start();
	require "db.php";
    if(!isset($_SESSION['userid'])) {
    header("location: logout.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
	<title>ORGAN DONATION</title>
    <link rel="stylesheet" href="style.css">	
    
        
</head>

<body>

<div class="main">
<?php
  include "navbar.php";
  ?>
<h2 class="logo">MY PROFILE</h2>
    <form method="post" name="view">
        <b class=head>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRECIPIENT DETAILS</b><br><br>
            <?php
                $sql1="select * from user where id='".$_SESSION["userid"]."'";
				$result1=$db->query($sql1);
				if($result1->num_rows >0)
					{
                    ?> <table id="c">
                    <tr>
                      <td><b>Name</b></td>
                      <td><b>Age</b></td>
                      <td><b>Gender</b></td>
                      <td><b>Address</td>
                      <td><b>Action</b></td>
                    </tr> <?php 
						while($row =$result1->fetch_assoc())
						    {
			?>
                              <tr>
                                <td><?php echo $row["pname"]; ?></td>
                                <td><?php echo $row["page"]; ?></td>
                                <td><?php echo $row["pgender"]; ?></td>
                                <td><?php echo $row["paddr"]; ?></td>
                                <td><a class="button" href="updatepatient.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('Are you sure you want to update donor details ?');">Update </a></td>
                              </tr>
                    <?php
						}
						}
						else {  echo "-";}
					?>
            </table>
            <br><b class=head>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDONATION DETAILS</b><br><br>
                     <?php
                        $sql1="select * from user,organ where user.id='".$_SESSION["userid"]."' and user.id=organ.id";   
						$result1=$db->query($sql1);
						if($result1->num_rows >0)
						{
                            ?> <table id="c">
                <tr>
                      <td><b>Bloodgroup</b></td>
                      <td><b>Sign</b></td>
                      <td><b>Kidney</td>
                      <td><b>Liver</b></td>
                      <td><b>Lung</b></td>
                      <td><b>Pancreas</b></td> 
                      <td><b>Intestine</b></td>
                      <td><b>Cornea</b></td>
                      <td><b>Heart</b></td>
                      <td><b>Skin</b></td>
                      <td><b>Bone</b></td>
                      <td><b>Status</b></td>
                      <td><b>Action</b></td>
                </tr> <?php 
						while($row =$result1->fetch_assoc())
						{
			  ?>
              <tr>
        
                <td><?php echo $row["bgroup"]; ?></td>
                <td><?php echo $row["sign"]; ?></td>
                <td><?php echo $row["kidney"]; ?></td>
                <td><?php echo $row["liver"]; ?></td>
                <td><?php echo $row["lung"]; ?></td>
                <td><?php echo $row["pancreas"]; ?></td> 
                <td><?php echo $row["intestine"]; ?></td>
                <td><?php echo $row["cornea"]; ?></td>
                <td><?php echo $row["heart"]; ?></td>
                <td><?php echo $row["skin"]; ?></td>
                <td><?php echo $row["bone"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td><a class="button" href="updatedonation.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('Are you sure you want to update donation details ?');">Update </a></td>
          
              </tr>
              <?php
						}
						}
						else {  echo "-";}
			  ?>
            </table>
            <br><b class=head>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCONTACT DETAILS</b><br><br>
                 
                        <?php
                        $sql1="select * from user where id='".$_SESSION["userid"]."'";
						$result1=$db->query($sql1);
						if($result1->num_rows >0)
						{
                            ?> <table id="c">
                    <tr>

                      <td><b>Name</b></td>
                      <td><b>Phone number</b></td>
                      <td><b>Email</td>
                      <td><b>Address</b></td>
                      <td><b>Action</b></td>

                    </tr> 
                    <?php 
						while($row =$result1->fetch_assoc())
						{
			        ?>
              <tr>
               
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["cno"]; ?></td>
                <td><?php echo $row["cmail"]; ?></td>
                <td><?php echo $row["caddr"]; ?></td>
                <td><a class="button" href="updatecontact.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('Are you sure you want to update contact details ?');">Update </a></td>
              
              </tr>
              <?php
						}
						}
						else {  echo "-";}
						?>
            </table>
            <div class="c">
                 
            <?php
                        $sql1="select * from user where id='".$_SESSION["userid"]."'";
						$result1=$db->query($sql1);
						if($result1->num_rows >0)
						{
						while($row =$result1->fetch_assoc())
						{
            ?>
			 
              <tr>
              <br><br>               
              <div class="search">
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <td><a class="button1" href="displayrecipients.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('Searching for matching donor');">Search donors</a></td>
              <br><br>
              </div>
                                           
              
             <div class="recipient">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                <td><a class="button2" href="recipients.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('Add donor details');">Add my donor</a></td>

              </div>
               <div class="recipient">
                 <br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                <td><a class="button2" href="recipients.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('View details of your donors ?');">My donors</a></td>

              </div>
                                            
              <br><br>              
             
                
  
              </tr>
             <?php
                        }
                    }
             ?>
                    </div>                                      
<br><br>
                                
                              
                                </form>
                </div>                   

</html>
