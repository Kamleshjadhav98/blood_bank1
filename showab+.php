<?php
$host="localhost";
$user="root";
$pass="";
$db="bbas";
$con=mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT `id`, `name`, `gender`, `age`, `mo_number`, `email`, `blood_group`, `medicaly_fit`, `address`, `date` FROM `donarradd` WHERE  blood_group='AB+' ";
$result = $con->query($sql);
if ($result->num_rows > 0){
}
else
{
	$msg="No record found";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
	h1{ text-shadow: 2px 2px 5px red;}
body{
	background-image: url('https://thumbs.dreamstime.com/z/heart-blood-drops-different-blood-types-white-background-heart-blood-drops-different-blood-types-white-158830677.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }

	h1{ text-shadow: 2px 2px 5px red;}
	h2{ text-shadow: 2px 2px 5px red;}
	th,td{ padding: 8px;}
.table{ text-shadow: 2px 2px 5px red; font-size:20px;}

	h1{ text-shadow: 2px 2px 5px red;}
	h3{ test-shadow: 2px 2px 5px red;}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and PHP code</title>
</form>
</head>
<body>
	<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
	
<table border="2"><h3><td style="font-size: 20px;"><a href="home1.html"> Back </a></td></h3></table>
				
     <h1 align="center"> AB+ Donner List </h1>
    <table border="3px" style="width:100%; line-height:40px; color:black;font-style:italic;">
        <thead>
            <tr style="font-variant:small-caps; color:black;font-size:18px  text-shadow: 2px 2px 5px red;bgcolor="grey";">
	<th class="table"  bgcolor="grey">Id</th>
                <th class="table" bgcolor="grey">Name</th>
	<th  class="table" bgcolor="grey">Gender</th>
	<th  class="table" bgcolor="grey">Age</th>
	<th  class="table" bgcolor="grey">Mobile No</th>
                <th  class="table" bgcolor="grey">Email</th>
	<th  class="table" bgcolor="red">Blood Group</th>
                <th  class="table" bgcolor="grey">Medicaly Fit</th>
                <th  class="table" bgcolor="grey">Address</th>
	<th  class="table" bgcolor="grey">Date</th>
            </tr>
        </thead>
        <tbody>
<?php
  while($row = $result->fetch_assoc()) 
{
    echo("<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td><td>".$row["mo_number"]."</td><td>".$row["email"]."</td><td>".$row["blood_group"]."</td><td>".$row["medicaly_fit"]."</td><td>".$row["address"]."</td><td>".$row["date"]."</td></tr>");
  }


$con->close();
?>
</tbody>
</table>
</body>
</html>