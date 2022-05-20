<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save.php" method="POST" >
                    <h4>Registro de nuevos usuarios</h4><br>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autocomplete="off" autofocus required><br>
                    </div>

                    <div class="form-group">
                        <input type="text" name="puesto" class="form-control" placeholder="Puesto" autocomplete="off" required><br>
                    </div>

                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required><br>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required><br>
                    </div>
                    <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-success" name="registrar" value="Registrar">
                    </div>
                </form>
            </div><br/>
            <?php if(isset($_SESSION['mensaje'])){?>
                    <div class="alert alert-<?= $_SESSION['mensaje_color'];?> alert-dismissible fade show" role="alert">
                    <div>
                        <?= $_SESSION['mensaje']?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();} ?>
        </div>
                <div class="col-md-8 table-dark">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th class="table-dark">ID</th>
                                <th class="table-dark">Nombre</th>
                                <th class="table-dark">Puesto</th>
                                <th class="table-dark">Usuario</th>
                                <th class="table-dark">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM usuarios";
                            $ver_usuarios = mysqli_query($conexion, $query);

                            while($row=mysqli_fetch_array($ver_usuarios)){ ?>
                                <tr>
                                    <td class="table-dark"><?php echo $row['id']?></td>
                                    <td class="table-dark"><?php echo $row['Nombre']?></td>
                                    <td class="table-dark"><?php echo $row['Puesto']?></td>
                                    <td class="table-dark"><?php echo $row['Usuario']?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>&nbsp
                                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                            <i class="bi bi-person-x-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>

<?php include("includes/footer.php")?>
