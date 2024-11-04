<?php
$conn=mysqli_connect("localhost:3307","root","");
if(!$conn)
{
	die("Connect failed:".mysqli_connect_error());
}
$sql="CREATE DATABASE sellbooks";
if(mysqli_query($conn,$sql))
{
	echo"database created successfully";
}
else
{
	echo"error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>