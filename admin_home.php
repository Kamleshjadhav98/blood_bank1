<!DOCTYPE html>
<html>

<head>
    <title>Admin-Login</title>
<style>
body{
	background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-blood-donation-poster-background-material-picture-image_1005808.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }

	h1{ text-shadow: 2px 2px 5px red;}
	h2{text-shadow: 3px 3px 6px red;}
	h3{text-shadow: 3px 3px 6px yellow;}
.table{text-shadow: 3px 3px 6px red;}

	</style>
	

</head>

<body bgcolor="white">
		
					<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
				<h1><marquee><i> "" Your Little Effort Can Give Other's Scond Chance To Live Life.....""</i></marquee></h1>	
					<table border="2" class="table">
						<td><a href="index.html" style="font-size: 20px;">Home</a></td>
					
					</table><br>
   </body>
</html>
<?php 
    $aname=$_POST["aname"];
    $apass=$_POST["apass"];
    if(isset($_POST['submit']))
    {
        if($aname=="Admin")
        {
            if($apass==="123")
            {
                ?><body bgcolor="white"><h2 align="center">You Are Login Sucessfully <h2><p><h3>For Admin Home Page Click On Next<h3></p><table class="table" border="3" align="center"><td align="center"><a href="home1.html"> NEXT </a></td> </table> <br> <br> <br><table class="table" border="3" align="center"><td><a href="admin.php" style="font-size: 20px;">Manage_Admin</a></td></table><?php
            }
            else{
                echo("Enter currect password ");
	?><table border="2">
		<td><a href="index.php"><h3>Back </h3></a></td>
	</table><?php
            }
        }
        else{
            echo("Enter currect user name");

        }
    }

?>