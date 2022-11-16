<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$email=$_GET['email'];
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyeria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE compradores SET nombre='".$nombre."', email='".$email."', direccion='".$direccion."', telefono='".$telefono."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../compradores.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>