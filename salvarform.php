<?php
include('conexion.php');

if (isset($_POST['salvarform'])) {
  $nom = $_POST['nombre'];
  $alias = $_POST['alias'];
  $pass = $_POST['password'];
  $read = $_REQUEST['read'];
  $write = $_REQUEST['write'];
  $admin = $_REQUEST['administrator'];
  $owner = $_REQUEST['owner'];
  $fecha = $_POST['hoy'];

  // echo $nom."<br>".$rank."<br>".$pt."<br>".$edad."<br>".$tor."<br>"."$nac";
  $query = "INSERT INTO `perassi`(`usuario_id`, `usuario_nombre`, `alias`, `password`, `gr_read`, `gr_write`, `gr_administrator`, `gr_owner`, `fecha`) VALUES (NULL,'$nom','$alias','$pass','$read','$write','$admin','$owner','$fecha')";
  // $query= "INSERT INTO perassi SET nom='$nom' , alias='$alias' , pass='$pass' , grupo='$grupo'";
  echo $query;

  $result = mysqli_query($conexion, $query);
  if (!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'usuario guardado';
  $_SESSION['message_type'] = 'primary';
  header('Location: index.php');
}
