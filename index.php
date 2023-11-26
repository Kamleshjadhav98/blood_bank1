<!DOCTYPE html>
<html>

<head>
    <title>Admin-Login</title> 
<style>
body{
	background-image: url('https://png.pngtree.com/background/20220716/original/pngtree-creative-simple-background-design-of-world-blood-donation-day-picture-image_1645341.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }
	
	h1{ text-shadow: 2px 2px 5px red;}
	h2{ text-shadow: 2px 2px 5px red;}
	h3{ text-shadow: 2px 2px 5px green;}
.table{  text-shadow: 2px 2px 5px red;}
.button{  text-shadow: 2px 2px 5px red;}

	</style>
</head>

<body bgcolor="white">
		
					<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
				<h1><marquee> <i> "" Your Little Effort Can Give Other's Second Chance To Live Life.....""</i></marquee></h1>	
					<table class="table"; border="2">
						<td style="font-size: 20px;"><a href="index.html">Home</a></td>
						
						<td style="font-size: 20px;"><a href="contact.php">contact</a></td>
						<td style="font-size: 20px;"><a href="help.html">Help</a></td>
						<td style="font-size: 20px;"><a href="about1.php">About</a></td>
					</table>
    <h2>Admin Login</h2>
	<form action="admin_home.php" method="post">
    <fieldset align="center">
        <legend>
           <h2> Sign In To Admin Account</h2>
        </legend>
        <p>
            <i>Please Enter  Admin Name And Password To Log In..</i><br />
            
        </p>

        
        <h3>Name :<input type="text" name="aname" placeholder="Username"></h3>


       <h3>Password: <input type="password" name="apass" placeholder="Password"><i class="fa fa-lock"></i></h3><br/>



        </br><button class="button" type="submit" name="submit">
            <h3>Login<h3>
        </button><br>

<br><table align="center">
<td style="font-size: 20px;"><a href="index.html">Log-Out</a></td>
					</table>
	
        

    </fieldset>
    </form>

</body>


</html>