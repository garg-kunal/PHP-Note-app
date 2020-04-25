<?php 

$con = mysqli_connect('127.0.0.1','root','','noteapp');
if($con){
	echo " ";
}

else
{
	echo "not connected ";
}

$r=$_GET['rnk'];
$query="delete from note where id='$r'";

$data=mysqli_query($con,$query);
if($data){
	header("Location:index.php");
}
else{
	echo mysqli_error($con);
}

?>