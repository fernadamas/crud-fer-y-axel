<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyeria";

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO compradores (nombre, email, direccion, telefono)
VALUES ('$nombre', '$email', '$direccion', '$telefono')";

if ($conn->query($sql) === TRUE) {
    header("location:../compradores.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>