//db.php
<?php
$servername = "localhost";
$username = "root";
$password = "Rishitha"; 
$dbname = "task_3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>