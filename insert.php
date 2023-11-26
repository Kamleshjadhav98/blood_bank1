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
$gender=$_POST['gender'];
$age=$_POST['age'];
$mono=$_POST['mo_number'];
$email=$_POST['email'];
$blood=$_POST['blood_group'];
$medicalyfit=$_POST['medicaly_fit'];
$address=$_POST['address'];
$date=$_POST['date'];
$query=mysqli_query($con,"insert into donarradd(id,name,gender,age,mo_number,email,blood_group,medicaly_fit,address,date) values('$id','$name','$gender','$age','$mono','$email','$blood','$medicalyfit','$address','$date')");
if($query)
{
	echo "<script>alert('Successfully Registered New Donnar');</script>";
}
else
{
	echo("Error". mysqli_connect_error()) ;
}
}
?>
						