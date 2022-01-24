<?php
include("conexion.php");
?>
<?php include("include/header2.php");  ?>
<div class="container p-4">

    <div class="row d-flex justify-content-center ">
        <div class="col-md-4">

            <div class="card border-success card-body">
                <form action="validarlog.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="contraseña" autofocus>
                    </div>

                    <input type="submit" name="salvarform" class="btn btn-success btn-block" value="Ingresar">

                    <a href="registrar.php" class="btn btn-outline-success">Registrar</a>
                </form>

            </div>
        </div>

    </div>
</div>
<?php include("include/footer.php"); ?>