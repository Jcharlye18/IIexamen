<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bpn1amk6dmwvbgxvyfum-mysql.services.clever-cloud.com","uawh1atuvbu4n0ir","aalx4oQURPbpUWPSowja","bpn1amk6dmwvbgxvyfum");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }