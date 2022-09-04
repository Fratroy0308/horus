<?php 
include('conexion.php') 

if(!empty($_POST['nombre']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
}

//Validacion

$sql = "INSERT INTO USUARIOS (nombre, correo , email)
VALUES ('$nombre', '$correo', '$email')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";  
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();

header('Location:index.php');

?>