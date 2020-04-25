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

        $item=$_GET['rnl'];
        $query="Select * from note where id='$item' ";
		$data=mysqli_query($con,$query);
		$result = mysqli_fetch_assoc($data);
?>
		<html>
		<head>

	<!-- Bootsrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script type="text/javascript" src="index.js"></script>
     <title>Update</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
	<div class="container-fluid bg-dark text-center display-3" style="color: white;">
		Note-App
	</div>
 	<div class=" container " style="margin-top: 10px;">
 		<div class="card">
 			<div class="card-header">Please Update Your Data <?php echo $result['id'];?></div>
 		<div class="card-body">
 			<form method="GET" class="form-group" action="">
 			<input type="text" name="data1" id="data1" value='<?php echo $result['id'];?>' class="form-control" style="display: none"><br><br>
 			<input type="text" name="data" id="data" value='<?php echo $result['notes'];?>' class="form-control"><br><br>
 			<input type="submit" name="Submit" class="btn btn-success" value="Update Item">
 		</form>
 		
<?php
// error_reporting(0);
if($_GET['Submit'])
{
$new=$_GET['data'];
$new1=$_GET['data1'];

$query1=" UPDATE NOTE SET NOTES ='$new' WHERE id='$new1'";

$run=mysqli_query($con,$query1);
if($run){
	echo mysqli_error($con);
	header("Location:index.php");
}else{
	echo " not saved";
}
}


?>
</div>
 		
 	</div> 
 </div>
 <!-- <div class="container-fluid bg-dark text-center display-4" style="color: white;vertical-align: bottom;">
		Mainted by garg industries
	</div>
	 -->
	</body>
	</html>
