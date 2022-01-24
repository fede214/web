<?php
include("conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query= "DELETE FROM perassi WHERE usuario_id  = $id";
    $result= mysqli_query($conexion,$query);
    if(!$result) {
        die("Query Failed.");
      }
      $_SESSION['message'] = 'usuario borrado';
      $_SESSION['message_type'] = 'danger';
      header('Location: tablau.php');
       
}
?>