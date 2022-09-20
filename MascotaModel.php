<?php
include_once "conexion.php";


class Mascota
{

    private $nombre;


    /*public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }*/

    public function GuardarMascota($nom)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into mascotas (nombre) values ("."'".$_POST['nombre']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaMascota.php");
    }
    public function ListarMascotas()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarMascota($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas where idMascota=$id");
      return $resultado;
    }

    public function EditarMascota($id,$nom)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update mascotas set nombre="."'".$nom."'"." where idMascota = $id");
    }

    public function EliminarMascota($id,$apel,$nom,$dir,$tel)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Delete From Mascotas where idMascota = $id");
    }
}
