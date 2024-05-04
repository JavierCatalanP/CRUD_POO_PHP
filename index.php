<?php

require_once "Controladores/rutasC.php"; // Accediendo a rutas del controlador
require_once "Controladores/adminC.php"; // Accediendo a controlador de admin
require_once "Controladores/empleadosC.php"; // Accediendo a controlador de empleados

require_once "Modelos/rutasM.php";// Accediendo a rutas del modelo
require_once "Modelos/adminM.php"; // Accediendo a modelo de admin
require_once "Modelos/empleadosM.php"; // Accediendo a modelo de empleados

$rutas = new RutasControlador(); // Instanciando la clase
$rutas -> Plantilla(); // Accediendo a la plantilla

//Prueba desde maquina 3