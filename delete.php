<?php
$host="localhost";
$user="root";
$pass="";
$db="bbas";
$con=mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "DELETE FROM `donarradd` WHERE id='id' ";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and PHP code</title>
</form>
</head>
<body>
	<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
	
<table border="2"><h3><td style="font-size: 20px;"><a href="home1.html"><< Back </a></td></h3></table>
				
    <h3>Display A+ Donner List </h3>
    <table border="3px" style="width:1300px; line-height:40px;">
        <thead>
            <tr>
	<th>Id</th>
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