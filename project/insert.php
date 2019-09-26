<?php

$firstname=$_POST['firstname'];
$emailid=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
if(!empty($firstname) || !empty($emailid) || !empty($mobileno) )
{	
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="serviceform";
}

$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()) {
	die('connection failed ('.mysqli_connect_errno().')'.mysqli_client_encoding());
}
else{
		$sql="INSERT INTO registration(firstname,emailid,mobileno) values('$firstname','$emailid','$mobileno')";
		if ($conn->query($sql)) {
			echo "Data recorded successfully";
		}
		else{
			"Error".$sql."<br>".$conn->error;
		}
		$conn->close();
}

?>