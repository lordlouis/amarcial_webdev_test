<?php include("db.php")?>
<?php include("includes/header.php")?>

<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/cohete.png"
                    style="width: 30px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Bienvenido a tus usuarios</h4>
                </div>

                <form action="validar_login.php" method="post">
                  <p>Por favor ingresa tu usuario y contraseña</p>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Escribir..."  name="usuario"/>
                    <label class="form-label" for="form2Example11">Nombre de usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password"/>
                    <label class="form-label" for="form2Example22">Contrseña</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                  </div>

                </form>
                <?php if(isset($_SESSION['mensaje'])){?>
                    <div class="alert alert-<?= $_SESSION['mensaje_color'];?> alert-dismissible fade show" role="alert">
                    <div>
                        <?= $_SESSION['mensaje']?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();} ?>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <img src="img/proyecto.png" class="img-fluid" alt="Sample image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








<?php include("includes/footer.php")?>