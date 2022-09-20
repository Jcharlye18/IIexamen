<?php
include "MascotaModel.php";
$nuevoMascota = new Mascota();

if(isset($_POST['btnGuardar']))
{
    $nuevoMascota->GuardarMascota($_POST['nombre']);
    header('Location: VistaMascota.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoMascota->EditarMascota($_POST['idStudent'],$_POST['txtnombre']); 
 header('Location: VistaMascota.php');
        
}
else
if(isset($_POST['btnEliminar']))
{
 $nuevoMascota->EliminarMascota($_POST['idStudent'],$_POST['txtnombre']); 
 header('Location: VistaMascota.php');
        
}



