<?php

	$mysqli=new mysqli('localhost','root','','empdetailes') or die(mysqli_error($mysqli));
	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$address=$_POST['address'];
		$salary=$_POST['salary'];
		
		$mysqli->query("INSERT into users(id,name,address,salary) VALUES('','$name','$address','$salary')") or die(mysqli_error($mysqli));
		
	}

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM users WHERE id=$id") or die(mysqli_error($mysqli));
	
	
}














?>
