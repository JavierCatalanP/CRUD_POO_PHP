<?php 
// Crear empleados

class EmpleadosC {
    public function RegistrarEmpleadoC() {
        if(isset($_POST["nombreR"])){

            $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"], "email"=>$_POST["emailR"], "puesto"=>$_POST["puestoR"], "salario"=>$_POST["salarioR"]);

            $tablaBD = "empleados";

            $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";   
            }

        }

    }

// Mostrar los empleados
public function MostrarEmpleadosC() {

    $tablaBD = "empleados";
    $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

    //if (is_array($respuesta) || is_object($respuesta)) {
        foreach($respuesta as $key => $value){
            echo '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["apellido"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["puesto"].'</td>
                    <td>$ '.$value["salario"].'</td>
                    <td><button>Editar</button></td>
                    <td><button>Borrar</button></td>
                </tr>';
        }
    //} else {
      //  echo "No se encontraron empleados.";
    //}
}
}