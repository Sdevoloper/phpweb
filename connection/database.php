<?php
$servername = "localhost";
$username = "AI12KXeUaX";
$password = "D6ngkNsTKi";
$db = "AI12KXeUaX";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>