<?php 
error_reporting(0);
$con = mysqli_connect('127.0.0.1','root','','noteapp');
if($con){
	echo " ";
}

else
{
	echo "not connected ";
}

        $item=$_GET['rn'];
        $new=$item+1;
        $id=1;
		$query1="UPDATE `common` SET `like`='$new' WHERE 1";

            $run=mysqli_query($con,$query1);
    if($run){
	header('Location:index.php');
}
else{
	echo mysqli_error($con);
	echo 'not saved';
}

?>