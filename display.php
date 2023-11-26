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
    $selectQuery = "SELECT * FROM `donarradd` ";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
 }
else
{
        $msg = "No Record found";
 }
}
?>