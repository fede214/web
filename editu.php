<?php
include("conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM perassi WHERE usuario_id  = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['usuario_nombre'];
        $alias = $row['alias'];
        $read = $row['read'];
        $write = $row['write'];
        $admin = $row['administrator'];
        $owner = $row['owner'];
        $fecha = $row['hoy'];
    }
}
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $alias = $_POST['alias'];
    // $pass = $_POST['password'];
    $read = $_POST['read'];
    $write = $_POST['write'];
    $admin = $_POST['administrator'];
    $owner = $_POST['owner'];
    $fecha = $_POST['hoy'];
    $query = "UPDATE `perassi` SET `usuario_id`='$id',`usuario_nombre`='$nombre',`alias`='$alias',`gr_read`='$read',`gr_write`='$write',`gr_administrator`='$admin',`gr_owner`='$owner',`fecha`='$fecha' WHERE 1";
    mysqli_query($conexion, $query);
    echo $query;
    $_SESSION['message'] = 'usuario actualizado';
    $_SESSION['message_type'] = 'info';
    header("Location:tablau.php");
}
?>
<?php include("include/header2.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <div class="card card-body">
                <form action="editu.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Actulice nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alias" value="<?php echo $alias ?>" class="form-control" placeholder="Actulice alias">
                    </div>
                    <div class="form-group">
                        <input type="text" name="read" value="<?php echo $read ?>" class="form-control" placeholder="Actulice read">
                    </div>
                    <div class="form-group">
                        <input type="text" name="write" value="<?php echo $write ?>" class="form-control" placeholder="Actulice write ">
                    </div>
                    <div class="form-group">
                        <input type="text" name="administrator" value="<?php echo $admin ?>" class="form-control" placeholder="Actulice administrator">
                    </div>
                    <div>
                        <input type="text" name="owner" value="<?php echo $owner ?>" placeholder="Actualice owner">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" value="<?php echo $fecha ?>" class="form-control" placeholder="Actulice fecha ">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block" name="Actualizar">
                        Actualizar</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>