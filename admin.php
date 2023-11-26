<!DOCTYPE html>
<html >

	<head>
		<title>Admin Registration</title>
	
	<style>
body{
	background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-blood-donation-poster-background-material-picture-image_1006351.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }

	h1{ text-shadow: 4px 4px 10px red;}
	h3{ text-shadow: 2px 2px 5px purple;}
	h4{ text-shadow: 2px 2px 5px red;}
.button {font-variant:small-caps; color:black; font-size:25px;  text-shadow: 2px 2px 5px red;}
.table{ text-shadow: 2px 2px 5px red; font-size:20px;}
  
</style>
	
	</head>

	<body bgcolor="white">
		<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
		<h1><marquee><i> "" Your Little Effort Can Give Other's Second Chance To Live Life.....""</i></marquee></h1>	
		
		<table class="table" border="2"><h3><td style="font-size: 22px; font-style:italic;"><a href="index.html"> Back </a></td></h3></table>
				
		<!-- start: REGISTRATION -->
					<form name="registration" method="POST" action="inserta.php">
						<fieldset align="left">
							<legend align="center">
								<h3>Admin Info..</h3>
							</legend>
							<h3><p style="color:black"><i>NOTE :- Edit Admin Information...</i></p></h3>
	 						<p style="color:black">
								<h4>Enter Admin Details Below : <h4>
							</p>
								ID :<input type="text"  name="id" placeholder="ID" required><br>
							     <br>
								NAME : <input type="text"  name="name" placeholder="Name" required><br><br>
								PASSWORD : <input type="password"  name="pass" placeholder="Password" required><br><br>
								CONFIRM PASS: <input type="password"  name="pass" placeholder="Confirm Password" required><br><br>
									AGE :<input type="text" name="age" placeholder="Enter Age here "><br><br>
									MOBILE NO :<input type="text" name="mo_number" placeholder="Enter Mobile .No here"><br><br>
									EMAIL :<input type="email" name="email" placeholder="Enter Email .here"><br><br>
									DATE :<input type="date" name="date" placeholder="Enter Date"><br><br>
								<button class="button" type="submit"  name="submit">
									Submit 
								</button>
								<button class="button" type="display"  name="display"><a href="admin_history.php">
									Display
								</a></button>
							
						</fieldset>
					</form>

					
		
	</body>
	<!-- end: BODY -->
</html>