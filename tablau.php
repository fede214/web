<?php include("conexion.php"); ?>
<?php include("include/header.php");  ?>
<div class="conteiner mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8   text-center">
      <table class="table table-bordered table-hover " id="tablaju" class="display">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Alias</th>
            <th>grupo_read</th>
            <th>grupo_write</th>
            <th>grupo_administrator</th>
            <th>grupo_owner</th>
            <th>fecha de alta</th>
            <th>panel</th>


          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM perassi";
          $result_list = mysqli_query($conexion, $query);
          while ($row = mysqli_fetch_array($result_list)) { ?>
            <tr>
              <td><?php echo $row['usuario_id']; ?></td>
              <td><?php echo $row['usuario_nombre']; ?></td>
              <td><?php echo $row['alias']; ?></td>
              <td><?php echo $row['gr_read']; ?></td>
              <td><?php echo $row['gr_write']; ?></td>
              <td><?php echo $row['gr_administrator']; ?></td>
              <td><?php echo $row['gr_owner']; ?></td>
              <td><?php echo $row['fecha']; ?></td>
              <td>
                <div class="input-group mb-3">
                  <div class="input-group-preped">
                    <a href="editu.php?id=<?php echo $row['usuario_id'] ?>" class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                    </a>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-preped">
                    <a href="boraru.php?id=<?php echo $row['usuario_id'] ?>" class="btn btn-danger">
                      <i class="far fa-trash-alt"></i>
                    </a>
                  </div>
                </div>



              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</div>
<?php include("include/footer.php"); ?>