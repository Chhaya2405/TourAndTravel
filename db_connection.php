<?php
$host="localhost";
$username="root";
$password="";
$database="tourAndtravel";

$conn=mysqli_connect($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// printf('Connect Successfully.<br/>');

?>