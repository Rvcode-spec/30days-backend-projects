
<?php
$host = 'localhost';
$db = 'crud_op';
$user = 'root';
$pass = 'Vsnl@123';


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>




