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

$title=$_POST['title'];
$place=$_POST['place'];
$article=$_POST['article'];

$sql="INSERT INTO event(Name, Place, Description) VALUES ('$title','$place','$article')";



if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Uploaded');window.location.href='edit.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
