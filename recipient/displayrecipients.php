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
<h2 class="logo">MATCHING RECIPIENTS</h2>
    <form method="post" name="view">
    
            <br><b class=head>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRECIPIENT DETAILS</b><br><br>
                     <?php
                       $sql1="select * from user,organ where user.id='".$_GET['requestid']."' and organ.id='".$_GET['requestid']."' ";
   
                       $result1=$db->query($sql1);
                      if($result1->num_rows >0)
                      { while($row1 =$result1->fetch_assoc())
                      {
                      
                          $db=$row1['bgroup'];
                          $ds=$row1['sign'];
                          $kidney=$row1['kidney'];
                          $liver=$row1['liver'];
                          $lung=$row1['lung'];
                          $pancreas=$row1['pancreas'];
                          $intestine=$row1['intestine'];
                          $cornea=$row1['cornea'];
                          $heart=$row1['heart'];
                          $skin=$row1['skin'];
                          $bone=$row1['bone'];
                         
                        
                      }
                  }
                  
                     if ($db=='O')
                     {
                       //select * from user,organ where user.type = 'recipient' and user.bgroup in ('O','A','B','AB') and user.sign ='positive' and organ.status ='available'and (organ.kidney ='yes'or organ.liver ='no' or organ.lung ='yes' or organ.pancreas ='yes'or organ.intestine ='no' or organ.cornea ='no' or organ.heart ='yes' or organ.skin ='yes' or organ.bone ='no') and user.id = organ.id;

                        $sql3="select * from user,organ where user.type = 'donor' and user.bgroup = 'O' and user.sign = '$ds' and organ.status ='available' and (organ.kidney ='$kidney' or organ.liver ='$liver' or organ.lung ='$lung' or organ.pancreas ='$pancreas'or organ.intestine ='$intestine' or organ.cornea ='$cornea' or organ.heart ='$heart' or organ.skin ='$skin' or organ.bone ='$bone') and user.id = organ.id ";   
                        require "db.php";
                       $result3=$db->query($sql3);
                      // echo $result2;
						/*if($result2->num_rows > 0)
						{*/
                            ?>

                       
                         <table id="c">
                <tr>
                      <td><b>Name</b></td>
                      <td><b>Age</b></td>
                      <td><b>Gender</b></td>
                      <td><b>Bloodgroup</b></td>
                      <!---<td><b>Sign</b></td>--->
                      <td><b>Kidney</td>
                      <td><b>Liver</b></td>
                      <td><b>Lung</b></td>
                      <td><b>Pancreas</b></td> 
                      <td><b>Intestine</b></td>
                      <td><b>Cornea</b></td>
                      <td><b>Heart</b></td>
                      <td><b>Skin</b></td>
                      <td><b>Bone</b></td>
                      <!---<td><b>Status</b></td>--->
                      <td><b>Contact name</b></td>
                      <td><b>Contact email</b></td>
                      <td><b>Contact phone</b></td>
                     
                     
                    
                </tr> <?php 
						while($row = $result3->fetch_assoc())
						{
			  ?>
              <tr>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["page"]; ?></td>
                <td><?php echo $row["pgender"]; ?></td>
                <td><?php echo $row["bgroup"]; ?></td>
             
                <td><?php echo $row["kidney"]; ?></td>
                <td><?php echo $row["liver"]; ?></td>
                <td><?php echo $row["lung"]; ?></td>
                <td><?php echo $row["pancreas"]; ?></td> 
                <td><?php echo $row["intestine"]; ?></td>
                <td><?php echo $row["cornea"]; ?></td>
                <td><?php echo $row["heart"]; ?></td>
                <td><?php echo $row["skin"]; ?></td>
                <td><?php echo $row["bone"]; ?></td>
                
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["cmail"]; ?></td>
                <td><?php echo $row["cno"]; ?></td>
               <!--- <td><a class="button" href="seedetails.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('See recipient details ?');">See details </a></td>
          --->
              </tr>

            

              <?php
						}}
            if ($db=='A')
                     {
                       //select * from user,organ where user.type = 'recipient' and user.bgroup in ('O','A') and user.sign ='positive' and organ.status ='available'and (organ.kidney ='yes'or organ.liver ='no' or organ.lung ='yes' or organ.pancreas ='yes'or organ.intestine ='no' or organ.cornea ='no' or organ.heart ='yes' or organ.skin ='yes' or organ.bone ='no') and user.id = organ.id;

                        $sql3="select * from user,organ where user.type = 'donor' and user.bgroup in ('A','O') and user.sign = '$ds' and organ.status ='available' and (organ.kidney ='$kidney' or organ.liver ='$liver' or organ.lung ='$lung' or organ.pancreas ='$pancreas'or organ.intestine ='$intestine' or organ.cornea ='$cornea' or organ.heart ='$heart' or organ.skin ='$skin' or organ.bone ='$bone') and user.id = organ.id ";   
                        require "db.php";
                       $result3=$db->query($sql3);
                      // echo $result2;
						/*if($result2->num_rows > 0)
						{*/
                            ?>

                       
                         <table id="c">
                <tr>
                      <td><b>Name</b></td>
                      <td><b>Age</b></td>
                      <td><b>Gender</b></td>
                      <td><b>Bloodgroup</b></td>
                      <!---<td><b>Sign</b></td>--->
                      <td><b>Kidney</td>
                      <td><b>Liver</b></td>
                      <td><b>Lung</b></td>
                      <td><b>Pancreas</b></td> 
                      <td><b>Intestine</b></td>
                      <td><b>Cornea</b></td>
                      <td><b>Heart</b></td>
                      <td><b>Skin</b></td>
                      <td><b>Bone</b></td>
                      <!---<td><b>Status</b></td>--->
                      <td><b>Contact name</b></td>
                      <td><b>Contact email</b></td>
                      <td><b>Contact phone</b></td>
                     
                     
                    
                </tr> <?php 
						while($row = $result3->fetch_assoc())
						{
			  ?>
              <tr>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["page"]; ?></td>
                <td><?php echo $row["pgender"]; ?></td>
                <td><?php echo $row["bgroup"]; ?></td>
             
                <td><?php echo $row["kidney"]; ?></td>
                <td><?php echo $row["liver"]; ?></td>
                <td><?php echo $row["lung"]; ?></td>
                <td><?php echo $row["pancreas"]; ?></td> 
                <td><?php echo $row["intestine"]; ?></td>
                <td><?php echo $row["cornea"]; ?></td>
                <td><?php echo $row["heart"]; ?></td>
                <td><?php echo $row["skin"]; ?></td>
                <td><?php echo $row["bone"]; ?></td>
                
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["cmail"]; ?></td>
                <td><?php echo $row["cno"]; ?></td>
               <!--- <td><a class="button" href="seedetails.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('See recipient details ?');">See details </a></td>
          --->
              </tr>

            

              <?php
						}}
            if ($db=='B')
                     {
                       //select * from user,organ where user.type = 'recipient' and user.bgroup in ('O','A','B','AB') and user.sign ='positive' and organ.status ='available'and (organ.kidney ='yes'or organ.liver ='no' or organ.lung ='yes' or organ.pancreas ='yes'or organ.intestine ='no' or organ.cornea ='no' or organ.heart ='yes' or organ.skin ='yes' or organ.bone ='no') and user.id = organ.id;

                        $sql3="select * from user,organ where user.type = 'donor' and user.bgroup in ('B','O') and user.sign = '$ds' and organ.status ='available' and (organ.kidney ='$kidney' or organ.liver ='$liver' or organ.lung ='$lung' or organ.pancreas ='$pancreas'or organ.intestine ='$intestine' or organ.cornea ='$cornea' or organ.heart ='$heart' or organ.skin ='$skin' or organ.bone ='$bone') and user.id = organ.id ";   
                        require "db.php";
                       $result3=$db->query($sql3);
                      // echo $result2;
						/*if($result2->num_rows > 0)
						{*/
                            ?>

                       
                         <table id="c">
                <tr>
                      <td><b>Name</b></td>
                      <td><b>Age</b></td>
                      <td><b>Gender</b></td>
                      <td><b>Bloodgroup</b></td>
                      <!---<td><b>Sign</b></td>--->
                      <td><b>Kidney</td>
                      <td><b>Liver</b></td>
                      <td><b>Lung</b></td>
                      <td><b>Pancreas</b></td> 
                      <td><b>Intestine</b></td>
                      <td><b>Cornea</b></td>
                      <td><b>Heart</b></td>
                      <td><b>Skin</b></td>
                      <td><b>Bone</b></td>
                      <!---<td><b>Status</b></td>--->
                      <td><b>Contact name</b></td>
                      <td><b>Contact email</b></td>
                      <td><b>Contact phone</b></td>
                     
                     
                    
                </tr> <?php 
						while($row = $result3->fetch_assoc())
						{
			  ?>
              <tr>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["page"]; ?></td>
                <td><?php echo $row["pgender"]; ?></td>
                <td><?php echo $row["bgroup"]; ?></td>
             
                <td><?php echo $row["kidney"]; ?></td>
                <td><?php echo $row["liver"]; ?></td>
                <td><?php echo $row["lung"]; ?></td>
                <td><?php echo $row["pancreas"]; ?></td> 
                <td><?php echo $row["intestine"]; ?></td>
                <td><?php echo $row["cornea"]; ?></td>
                <td><?php echo $row["heart"]; ?></td>
                <td><?php echo $row["skin"]; ?></td>
                <td><?php echo $row["bone"]; ?></td>
                
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["cmail"]; ?></td>
                <td><?php echo $row["cno"]; ?></td>
               <!--- <td><a class="button" href="seedetails.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('See recipient details ?');">See details </a></td>
          --->
              </tr>

            

              <?php
						}}
            if ($db=='AB')
                     {
                       //select * from user,organ where user.type = 'recipient' and user.bgroup in ('O','A','B','AB') and user.sign ='positive' and organ.status ='available'and (organ.kidney ='yes'or organ.liver ='no' or organ.lung ='yes' or organ.pancreas ='yes'or organ.intestine ='no' or organ.cornea ='no' or organ.heart ='yes' or organ.skin ='yes' or organ.bone ='no') and user.id = organ.id;

                        $sql3="select * from user,organ where user.type = 'donor' and user.bgroup in ('AB','B','A','O') and user.sign = '$ds' and organ.status ='available' and (organ.kidney ='$kidney' or organ.liver ='$liver' or organ.lung ='$lung' or organ.pancreas ='$pancreas'or organ.intestine ='$intestine' or organ.cornea ='$cornea' or organ.heart ='$heart' or organ.skin ='$skin' or organ.bone ='$bone') and user.id = organ.id ";   
                        require "db.php";
                       $result3=$db->query($sql3);
                      // echo $result2;
						/*if($result2->num_rows > 0)
						{*/
                            ?>

                       
                         <table id="c">
                <tr>
                      <td><b>Name</b></td>
                      <td><b>Age</b></td>
                      <td><b>Gender</b></td>
                      <td><b>Bloodgroup</b></td>
                      <!---<td><b>Sign</b></td>--->
                      <td><b>Kidney</td>
                      <td><b>Liver</b></td>
                      <td><b>Lung</b></td>
                      <td><b>Pancreas</b></td> 
                      <td><b>Intestine</b></td>
                      <td><b>Cornea</b></td>
                      <td><b>Heart</b></td>
                      <td><b>Skin</b></td>
                      <td><b>Bone</b></td>
                      <!---<td><b>Status</b></td>--->
                      <td><b>Contact name</b></td>
                      <td><b>Contact email</b></td>
                      <td><b>Contact phone</b></td>
                     
                     
                    
                </tr> <?php 
						while($row = $result3->fetch_assoc())
						{
			  ?>
              <tr>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["page"]; ?></td>
                <td><?php echo $row["pgender"]; ?></td>
                <td><?php echo $row["bgroup"]; ?></td>
             
                <td><?php echo $row["kidney"]; ?></td>
                <td><?php echo $row["liver"]; ?></td>
                <td><?php echo $row["lung"]; ?></td>
                <td><?php echo $row["pancreas"]; ?></td> 
                <td><?php echo $row["intestine"]; ?></td>
                <td><?php echo $row["cornea"]; ?></td>
                <td><?php echo $row["heart"]; ?></td>
                <td><?php echo $row["skin"]; ?></td>
                <td><?php echo $row["bone"]; ?></td>
                
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["cmail"]; ?></td>
                <td><?php echo $row["cno"]; ?></td>
               <!--- <td><a class="button" href="seedetails.php?requestid=<?php echo $row["id"];?>" onclick="return confirm('See recipient details ?');">See details </a></td>
          --->
              </tr>

            

              <?php
						}}?>
            
       
						
			  
            </table>
            
     
   

            <br>
                                            
              <br><br>              
              
  
              </tr>
             <?php
                   
             ?>
                    </div>                                      
<br><br>
                                
                              
                                </form>
                </div>                   

</html>
