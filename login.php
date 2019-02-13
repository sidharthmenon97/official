<?php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "phoenix";
// Create connection
$conn = new mysqli($servername1, $username1, $password1, $dbname1);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$count=0;
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "Select * FROM admin WHERE username='$username' and pass='$password'";
$query = mysqli_query($conn, $sql);

if (!$query) { die ('SQL Error: ' . mysqli_error($conn));}
$count= mysqli_num_rows($query);
if($count==1)
	{
		header("Location:edit.html");
	}
else
	{
	 echo "<script type='text/javascript'>alert('Login Failed');window.location.href='login.html';</script>";
	}
?>