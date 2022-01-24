<?php include("conexion.php"); ?>
<?php
$nom = $_POST['nombre'];
$pass = $_POST['password'];
session_start();
$_SESSION['nombre'] = $nom;

$query = "SELECT * FROM `perassi` WHERE `usuario_nombre`='$nom' AND `password`='$pass'";
// echo $query;
$resultado = mysqli_query($conexion, $query);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:tablau.php");
} else {
?>
    <?php
    include("index.php");
    ?>
    <h1>Autenticacion no Valida</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
