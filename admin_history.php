<?php
$host="localhost";
$user="root";
$pass="";
$db="bbas";
$connectQuery = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    exit();
}
else
{
    $selectQuery = "SELECT * FROM `adminn` ";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
 }
else
{
        $msg = "No Record found";
 }
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
<style>
body{
	background-image: url('https://thumbs.dreamstime.com/z/heart-blood-drops-different-blood-types-white-background-heart-blood-drops-different-blood-types-white-158830677.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
 }

	h1{ text-shadow: 2px 2px 5px red;}
	h3{ text-shadow: 2px 2px 5px red;}
	th,td{ padding: 8px;}
.table{ text-shadow: 2px 2px 5px red; font-size:20px;}
</style>
</head>
<body>
	<h1 align="center"><a href="index.html" style="font-size: 70px;">Blood Donation System </a></h1>
	<h1><marquee><i> "" Your Little Effort Can Give Other's Second Chance To Live Life.....""</i></marquee></h1>	
	
<table class="table" border="2"><h3><td style="font-size: 22px; font-style:italic;"><a href="admin.php"> Back </a></td></h3></table>
				
    <h3 align="center">Display Admin Info </h3>
    <table border="3px" style="width:100%; line-height:40px; color:black;font-style:italic;">
        <thead>
            <tr style="font-variant:small-caps; color:black;font-size:18px  text-shadow: 2px 2px 5px red;bgcolor="grey";">
	<th class="table"  bgcolor="grey">Id</th>
                <th class="table" bgcolor="grey">Name</th>
	<th class="table" bgcolor="grey">Password</th>
	<th  class="table" bgcolor="grey">Age</th>
	<th  class="table" bgcolor="grey">Mobile No</th>
                <th  class="table" bgcolor="grey">Email</th>
	<th  class="table" bgcolor="grey">Date</th>
            </tr>
        </thead>
        <tbody>
          <?php
	while($row=mysqli_fetch_array($result))
	{
	  echo("<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["pass"]."</td><td>".$row["age"]."</td><td>".$row["mo_number"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td></tr>");
	}
          ?>
        </tbody>
      </table>
  </body>
</html>