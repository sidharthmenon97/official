<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoenix";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$phone=$_POST['phone'];
$msg=$_POST['message'];

$sql="INSERT INTO contact(Name, Phone, Message) VALUES ('$name','$phone','$msg')";



if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Uploaded');window.location.href='us.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>