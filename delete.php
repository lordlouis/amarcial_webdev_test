<?php 
include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id=$id";
        $result=mysqli_query($conexion,$query);
        if(!$result){
            die("Fallo la eliminación");
        }
        $_SESSION['mensaje'] = 'Usuario Eliminado';
        $_SESSION['mensaje_color'] = 'danger';
        header("Location: index.php");
    }
?>
