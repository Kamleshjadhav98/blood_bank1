<?php
$host="localhost";
$user="root";
$pass="";
$db="bbas";
$connectQuery = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `donarradd` ";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
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
</head>
<body>
    <h1>Display user list using HTML and PHP</h1>
    <?=$msg;?>
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
	<th>Id</th>
                <th>Name</th>
	<th>Gender</th>
	<th>Age</th>
	<th>Mobile no</th>
                <th>Email</th>
	<th>Blood Group</th>
                <th>Medicaly Fit</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
	   <td><?php echo $row['age']; ?></td>
	   <td><?php echo $row['mo_number']; ?></td>
	   <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['blood_group']; ?></td>
	   <td><?php echo $row['medicaly_fit']; ?></td>
	   <td><?php echo $row['address']; ?></td>
                <tr>
            <?}?>
        </tbody>
      </table>
  </body>
</html>