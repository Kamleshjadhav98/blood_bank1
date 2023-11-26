<!DOCTYPE html>
<html >

	<head>
		<title>User Registration</title>
	
	<style>
body{
	background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-blood-donation-poster-background-material-picture-image_1006351.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }

	h1{ text-shadow: 4px 4px 10px red;}
	h2{ text-shadow: 4px 4px 10px purple;}
	h3{ text-shadow: 4px 4px 15px Grey;}
	h4{ text-shadow: 2px 2px 5px red;}
.button {font-variant:small-caps; color:black; font-size:25px;  text-shadow: 2px 2px 5px red;}
  
</style>
	
	</head>

	<body bgcolor="white">
		<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
		<h1><marquee><i> "" Your Little Effort Can Give Other's Second Chance To Live Life.....""</i></marquee></h1>	
		
		<table border="2"><h3><td style="font-size: 20px;"><a href="home1.html">  Back </a></td></h3></table>
				
				
		<!-- start: REGISTRATION -->
					<form name="registration" method="POST" action="insert.php">
						<fieldset>
							<legend align=center><h2>
								Add New Donnar
							</h2></legend>
							<h3><i>NOTE :- Only (18+) & Medicaly Fit Person Can Donate Blood.</i></h3>
	 						
								<h4>Enter Donnar Details Below : <h4>
							
								ID :<input type="text"  name="id" placeholder="ID" required><br>
							     <br>
								NAME : <input type="text"  name="name" placeholder="Name" required><br><br>
								<label >
									GENDER :
								</label>
									<input type="radio"  name="gender" value="Female" >
									<label >
										Female
									</label>
									<input type="radio"  name="gender" value="Male">
									<label>
										Male
									</label><br><br>
									AGE :<input type="text" name="age" placeholder="Enter Age here "><br><br>
									MOBILE NO :<input type="text" name="mo_number" placeholder="Enter Mobile .No here"><br><br>
									EMAIL :<input type="email" name="email" placeholder="Enter Email .here"><br><br>
									<label for="blood_group">
										BLOOD GROUP :
									</label>
									<select id="blood_group" name="blood_group">
									<option value="Choose Blood Group" >Choose Blood Group</option>
									<option value="A-" >A-</option>
									<option value="A+" >A+</option>
									<option value="B-" >B-</option>
									<option value="B+" >B+</option>
									<option value="O-" >O-</option>
									<option value="O+" >O+</option>
									<option value="AB-" >AB-</option>
									<option value="AB+" >AB+</option>
									</select><br><br>
									
									<label >
									MEDICALLY FIT :
								</label>
									<input type="radio"  name="medicaly_fit" value="Yes" >
									<label >
										Yes
									</label>
									<input type="radio"  name="medicaly_fit" value="No">
									<label>
										No
									</label><br><br>
									ADDRESS :<input style="height:20px; font-size:10pt;" "type="text" name="address" placeholder="Enter Address here"><br><br>
									DATE :<input type="date" name="date" placeholder="Enter Date"><br><br>
								<button class="button" type="submit"  name="submit">
									Submit 
								</button>
								<button class="button" type="display"  name="display"><a href="donnar_history.php">
									Display
								</a></button>
							
						</fieldset>
					</form>

					
		
	</body>
	<!-- end: BODY -->
</html>