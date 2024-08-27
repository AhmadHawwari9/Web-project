
<?php
$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>