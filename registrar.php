<?php
include("conexion.php");
?>
<?php include("include/header2.php");  ?>
<div class="container p-4">

    <div class="row d-flex justify-content-center ">
        <div class="col-md-4">

            <div class="card border-success card-body">
                <form action="salvarform.php" method="post" onsubmit="return validacion()">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="alias" class="form-control" placeholder="alias" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="contraseña" autofocus>
                    </div>
                    <?php date_default_timezone_set('America/Argentina/San_Luis');
                    $hoy = date('d-m-Y g:i:s');

                    ?>
                    <input type="hidden" name="hoy" value="<?php echo $hoy ?>">
                    <div class="form-check form-switch">
                        <input type="hidden" name="read" value="no">
                        <input type="checkbox" name="read" class="form-check-input" role="switch" value="si">Read <br>
                        <input type="hidden" name="write" value="no">
                        <input type="checkbox" name="write" class="form-check-input" role="switch" value="si">Write <br>
                        <input type="hidden" name="administrator" value="no">
                        <input type="checkbox" name="administrator" class="form-check-input" role="switch" value="si">Administrator <br>
                        <input type="hidden" name="owner" value="no">
                        <input type="checkbox" name="owner" class="form-check-input" role="switch" value="si">Owner <br>

                    </div>
                    <input type="submit" name="salvarform" class="btn btn-success btn-block" value="Registrar">

                </form>

            </div>
        </div>

    </div>
</div>
<?php include("include/footer.php"); ?>