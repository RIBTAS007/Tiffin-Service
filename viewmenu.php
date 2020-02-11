<?php
require 'connectdb.php';
$query="SELECT * FROM `item` WHERE `a`='rice' ";
if($result=mysql_query($query))
{ $var = date("l");
  $var1 = date("d/m/Y");
	?>
    <!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>VIEW MENU</title>
         <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="css/styleUser.css">
     </head>
	 <body>
		  <!--Navigation BAR-->
		  
		 <nav class="navbar">
			 <div class="container-fluid">

				 <!-- Logo -->
				 <div class="navbar-header">
					 <button type="button" class="navbar-toggle" onclick="openNav()" data-target="#mainNavBar">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					 </button>
					 <div id="heads">
						 <a href="#" class="navbar-brand "><img class="logos" src="css/foodureca.jpg" alt="logo"></a>
						 <a href="#" class="navbar-brand ">    
						 <h2 style="color:white;"><b>Foodureca</h2>
					 </div>
				 </div>

				 <!-- Menu Items -->
				 <div class="collapse navbar-collapse" id="mainNavBar"  role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li><a  href="index.html"><i class="fa fa-home" aria-hidden="true"></i> <b>Home</b></a></li>
						
						
						 <li><a href="userreg1.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b> Register</b></a></li>
						 <li><a href="login.html"><i class="fa fa-user-circle" aria-hidden="true"></i><b> Login</b></a></li>
						
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="index.html" onclick="closeNav()"><i class="fa fa-home" aria-hidden="true" ></i><b>Home</b></a></li>
			     <li><a href="userreg1.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b> Register</b></a></li>
			     <li><a href="login.html" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i><b>Login</b></a></li>
			    
		     </ul>
		 </div>

		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
         
		  
         <h1 style="color:#e22b28;"class="btnpad">TODAY'S MENU</h1></br>
          <h1 style="color:#e22b28;"class="btnpad"> <?=$var1;?>,<?=$var;?></h1>
		  <div align="center" style="margin-top:100px">
              
	          <table  style="text-align:center">
					<tr style="color:#e22b28; text-align:center">
                        <th></th>
                        <th>ITEM 1</th>
                        <th>ITEM 2</th>
                        <th style="text-align:center">ITEM 3</th>
                        <th>FLAVOUR/ITEM 4</th>
                        <th>ITEM 5</th>
                       	<th>ITEM 6</th>
                        <th>ITEM 7</th>
                        <th>BILL(IN RS.)</th>
                     </tr>
                        <?php
               			 while($row1=mysql_fetch_array($result))
						{
							 ?>
                    <tr >
                    <td style="text-align:center">
					<?php 
					if($row1['id']=='1')
					echo "VEG LUNCH"; 
					if($row1['id']=="2")
					echo "NON-VEG LUNCH";
					 if($row1['id']=="3")
					echo "VEG DINNER"; 
					if($row1['id']=="4")
					echo "NON-VEG DINNER"; 
					?>
                    </td>
                    <td style="text-align:center"><?php echo $row1['a'];?></td>
                    <td style="text-align:center"><?php echo $row1['b'];?></td>
                    <td style="text-align:center"><?php echo $row1['c']; ?></td>
                     <td style="text-align:center"><?php echo $row1['d']; ?></td>
                      <td style="text-align:center"><?php echo $row1['da'];?></td>                      
                    <td style="text-align:center"><?php  echo $row1['e']; ?></td>
                      <td style="text-align:center"><?php echo $row1['f']; ?></td>
                      <td style="text-align:center"><?php echo $row1['bill']; ?></td>
                    </tr>
					<?php
						}
						?>
                 </table>
			 </div>
         </body>
     </html>
                     <?php
}
?>