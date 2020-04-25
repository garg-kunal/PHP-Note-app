<?php 

$con = mysqli_connect('127.0.0.1','root','',noteapp);
if($con){
	echo " connected ";
}

else
{
	echo "not connected ";
}

$item=$_POST['item'];


$query="INSERT INTO note(notes) VALUES ('$item')";

$data=mysqli_query($con,$query);

if($data)
{
	
	header("Location:index.php");
	

}
else
{
  echo mysqli_error($con);
}


?>