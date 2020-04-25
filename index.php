<?php 
session_start();
$userprofile=$_SESSION['user_name'];
$con = mysqli_connect('127.0.0.1','root','','noteapp');
error_reporting(0);

if($con){
	echo " ";
}

else
{
	echo "not connected ";
}
if($userprofile==true){
       $query="select * from note";
		$data=mysqli_query($con,$query);
		$total=mysqli_num_rows($data);

		$query1="select * from common";
		$data1=mysqli_query($con,$query1);
		$results = mysqli_fetch_assoc($data1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Note App</title>

	<!-- Bootsrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script type="text/javascript" src="index.js"></script>
</head>
<body>
	<div class="container-fluid bg-dark text-center display-3" style="color: white;">
		Note-App
	</div>
	<div class="container" style="margin-top: 15px">
		<div class="row">
			<button class="btn btn-primary" style="display: block;" id="add" onclick="show();">Add Item</button>
			  <div class="col-md-10">
			<form class="form-group" style="display: none;" id="form" action="save.php" method="POST">
				<input type="text" placeholder="Your Item" class="form-control" name="item" id="item" /><br>
				<input type="submit" value="Submit" class="btn btn-success" onclick="save();">
			</form>
		   </div>
		</div>
	</div>
	<hr style="height: 4px;color: black;">
	<div class="container" style="margin-top: 15px">
		<h1><i>List is here</i></h1>
		
		<?php
		while($result = mysqli_fetch_assoc($data))
		{?>

			<div class="card" style="margin-top: 4px;">
				<div class="card-header">
               <button class="btn btn-default" onclick="cut();">:</button>
               <div id="hello" style="display:none">
					<button class="btn btn-success" align="right"  onclick="update();"><a href="update.php?rnl=<?php echo $result['id']?>" style="text-decoration: none;color:white;float: right">Update</a></button>
				
				<button class="btn btn-danger" onclick="check(<?php echo $result['id']?>)">Delete</button>
			</div>
				</div>
			<div class="card-body" id="body">
				<b><?php
				$num=$result['id'];
			echo $num;
			?></b>
				<?php
			echo $result['notes'];
			?>
			</div>
			<div class="card-footer">
				
				<button class="btn btn-warning" id="like" onclick="inc(<?php echo $results['like']; ?>);"><?php echo $results['like']?>+</button>
				<!-- <button class="btn btn-warning"><?php echo $results['comment']?></button> -->
			</div>
		 </div>
		
		 <?php
		      }
		?>
	    </div>
	 </div>
	 <div class="container" style="margin-top: 10px;">
	 	<button class="btn btn-warning"><a href="logout.php" style="text-decoration: none;color: white">Logout</a></button>
	 </div>
</body>
</html>

<?php
}
else{
	header('location:form.html');
}
?>