<?php 
include("db.php");
if(isset($_POST['registrar'])){
    $Nombre = $_POST['nombre'];
    $Puesto = $_POST['puesto'];
    $Usuario = $_POST['usuario'];
    $Password = $_POST['password'];
    $query = "INSERT INTO usuarios(Nombre, Puesto, Usuario, Password) VALUES ('$Nombre', '$Puesto', '$Usuario', '$Password')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("Error al insertar");
    }
    $_SESSION['mensaje'] = 'Nuevo usuario creado';
    $_SESSION['mensaje_color'] = 'success';
    header("Location: index.php");
}
?>

