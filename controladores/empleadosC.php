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

            <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>
            <td><a href="index.php?ruta=empleados&idB='.$value["id"].'"><button>Borrar</button></a></td>
        </tr>';
    }
}

    //Editar empleado 
    public function EditarEmpleado(){

        $datosC = $_GET["id"];

        $tablaBD = "empleados";

        $respuesta = EmpleadosM::EditarEmpleadoM($datosC, $tablaBD);

        echo '<input type="hidden" value="'.$respuesta["id"].'" name="idE">
            <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

            <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellidoE" required>
        
            <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="emailE" required>
        
            <input type="text" placeholder="Puesto" value="'.$respuesta["puesto"].'" name="puestoE" required>
        
            <input type="text" placeholder="Salario" value="'.$respuesta["salario"].'" name="salarioE" required>
        
            <input type="submit" value="Actualizar">';

    }

//Actualizar Empleado
    public function ActualizarEmpleadoC(){

        if(isset($_POST["nombreE"])){
            
            $datosC = array("id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"], "apellido"=>$_POST["apellidoE"], "email"=>$_POST["emailE"], "puesto"=>$_POST["puestoE"], "salario"=>$_POST["salarioE"]); 

            $tablaBD = "empleados";

            $respuesta = EmpleadosM::ActualizarEmpleadoM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";   
            }
        }

    }

    //Eliminar Empleado
    public function BorrarEmpleadosC(){

        if(isset($_GET["idB"])){

            $datosC = $_GET["idB"];
            
            $tablaBD = "empleados";

            $respuesta = EmpleadosM::BorrarEmpleadoM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";   
            }

        }
    }




    

}