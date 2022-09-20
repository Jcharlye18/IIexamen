<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    img{
        width:20px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        Veterinaria
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="VistaMascota.php">Agregar mascota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ListarMascota.php">Listar mascota</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h3 class="text-center text-danger">LISTADO DE MASCOTA</h3>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <th>NOMBRE</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "MascotaModel.php";
        $Mascota = new Mascota();
        $ListaMascotas = $Mascota->ListarMascotas();
        while($Mascotas = mysqli_fetch_assoc($ListaMascotas))
        {?>
          <tr>
                <td>  <?php echo $Mascotas['nombre'] ?> </td>
                <td><a href="VistaEditarMascota.php?idEst=<?php echo $Mascotas['idMascota'];?>"><img src="editar.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php?idEst=<?php echo $Mascotas['idMascota'];?>"><img src="eliminar.png" alt="Eliminar" title="Eliminar"></a></td>
                
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>