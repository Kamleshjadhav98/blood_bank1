<?php
$host="localhost";
$user="root";
$pass="";
$db="bbas";
$con=mysqli_connect($host,$user,$pass,$db);
		if(!$con)
		{
			die("Error in connection:".mysqli_connect_error());
		}

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$mono=$_POST['mo_number'];
$email=$_POST['email'];
$date=$_POST['date'];
$query=mysqli_query($con,"insert into adminn(id,name,pass,age,mo_number,email,date) values('$id','$name','$pass','$age','$mono','$email','$date')");
if($query)
{
	echo "<script>alert('Successfully Uploded Admin Info..');</script>";
}
else
{
	echo("Error". mysqli_connect_error()) ;
}
}
?>
						