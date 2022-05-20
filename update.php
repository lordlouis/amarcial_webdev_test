<?php
include("db.php");
include("includes/navbar.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM usuarios WHERE id = $id";
        $result = mysqli_query($conexion, $query);
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_array($result);
                $nombre = $row['Nombre'];
                $puesto = $row['Puesto'];
                $usuario = $row['Usuario'];
                $password = $row['Password']; 
            }
        }
        if(isset($_POST['update'])){
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];
            $puesto = $_POST['puesto'];
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            
            $query = "UPDATE usuarios set Nombre = '$nombre', Puesto = '$puesto', Usuario = '$usuario', Password = '$password' where id = $id";
            mysqli_query($conexion,$query);
            $_SESSION['mensaje'] = 'Datos actualizados';
            $_SESSION['mensaje_color'] = 'warning';
            header("Location: index.php");
        }
?>

<?php include("includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="update.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <h3><center>Actualización de datos</center></h3>
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control" placeholder="Actualiza el nombre"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="puesto" value="<?php echo $puesto;?>" class="form-control" placeholder="Actualiza el puesto"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" class="form-control" placeholder="Actualiza el usuario"><br>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Actualiza tu contraseña"><br>
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>