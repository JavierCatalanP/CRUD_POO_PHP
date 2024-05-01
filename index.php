<?php

require_once "Controladores/rutasC.php"; // Accediendo a rutas del controlador
require_once "Controladores/adminC.php"; // Accediendo a controlador de admin

require_once "Modelos/rutasM.php";// Accediendo a rutas del modelo
require_once "Modelos/adminM.php"; // Accediendo a modelo de admin

$rutas = new RutasControlador(); // Instanciando la clase
$rutas -> Plantilla(); // Accediendo a la plantilla