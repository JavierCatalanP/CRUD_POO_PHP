<?php 

require_once "conexionBD.php";

class AdminM extends ConexionBD{

    public static function IngresoM($datosC, $tablaBD){
        $conexion = new ConexionBD(); // Crear una instancia de ConexionBD
        $pdo = $conexion->cBD()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> execute();

        return $pdo->fetch();
        $pdo->close();

    }
}
