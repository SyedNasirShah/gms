<?php
session_start();
include 'database.php';

if (isset($_POST['Login'])) 
{
	$email=$_POST['Email'];
	$password=$_POST['password'];

	if(!empty($_POST['Email']) && !empty($_POST['password']))
	{
	$query="SELECT * FROM adminlogin WHERE username='$email' && password='$password'";
	$result= mysqli_query($links,$query);
	$value= mysqli_num_rows($result);
	
	if ($value==1) 
	{	
		
		$array= mysqli_fetch_array($result);
		$user=$array['username'];
		$_SESSION['username']=$user;
		header('location:members.php');
	}

	else{
		echo '<script>alert("Username or Password Incorrect")</script>';
	    echo "<script>window.open('index.php','_self')</script>";
	}
	} 
	else{
		echo '<script>alert("Fill all fields first")</script>';
	    echo "<script>window.open('index.php','_self')</script>";
	}
}
?>
