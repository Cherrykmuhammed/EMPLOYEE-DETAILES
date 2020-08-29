<!DOCTYPE html>
<html>
<head>
<title>EMPLOYEE DETAILES</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<h2 class="row justify-content-center">EMPLOYEE DETAILES</H2>
</head>
<body>
<?php require_once 'add.php'; ?>
<div class="container">
	<?php
	$mysqli=new mysqli('localhost','root','','empdetailes') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM users") or die($mysqli->error);
	?>
	<div class="row justify-content-center">
		<table class="table">
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Address</th>
				<th>Salary</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
	<?php while($row=$result->fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['salary'];?></td>
				<td>
				
				<a href="empdetailes.php?delete=<?php echo $row['id']; ?>"
				class="btn btn-danger">Delete</a>
			 
			 
			
			
				</td>
			</tr>
		<?php endwhile; ?>
	
	
		</table>
	</div>
		
	
	
	
	
	
	
	<?php
	function pre_r($array){
		echo'<pre>';
		print_r($array);
		echo'</pre>';
	}
	
	
	?>
	<div class="row justify-content-center">
		<form action="empdetailes.php" method="POST">
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Salary</label>
		<input type="number_format" name="salary" class="form-control" required>
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary "name="add">Add</button>
		</div>
		</form>
	</div>
	</div>



</body>
</html>