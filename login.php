<?php 
error_reporting(0);
session_start();
$un=$_POST['username'];
$pwd =$_POST['password'];
$con = mysqli_connect('127.0.0.1','root','','noteapp');
if($con){
	echo " ";
}

else
{
	echo "not connected ";
}


$un=$_POST['email'];
$pwd =$_POST['password'];
$query ="SELECT * FROM USERS WHERE email='$un' AND password='$pwd'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total==1){
	$_SESSION['user_name']=$un;
	header('location:index.php');
}
else{
	echo "Please Enter Correct Credentials";
}

?> 