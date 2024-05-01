<?php

require_once "Controladores/rutasC.php"; //Accediendo a rutas del controlador
require_once "Modelos/rutasM.php";//Accediendo a rutas del modelo

$rutas = new RutasControlador(); //Instanciando la clase
$rutas -> Plantilla(); //Accediendo a la plantilla