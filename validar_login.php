<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];


include('db.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    session_start();
    $_SESSION['usuario']=$usuario;
    header("location:index.php");
}else{
    
    $_SESSION['mensaje'] = 'Usuario o contraseña incorrectos';
    $_SESSION['mensaje_color'] = 'danger';
    header("location:login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>