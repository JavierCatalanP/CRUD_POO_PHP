<?php

require_once "Controladores/rutasC.php"; // Accediendo a rutas del controlador
require_once "Controladores/adminC.php"; // Accediendo a controlador de admin
require_once "Controladores/empleadosC.php"; // Accediendo a controlador de empleados

require_once "Modelos/rutasM.php";// Accediendo a rutas del modelo
require_once "Modelos/adminM.php"; // Accediendo a modelo de admin
require_once "Modelos/empleadosM.php"; // Accediendo a modelo de empleados

$rutas = new RutasControlador(); // Instanciando la clase
$rutas -> Plantilla(); // Accediendo a la plantilla

//https://www.udemy.com/course/draft/2287845/learn/lecture/14250056#overview
//https://www.udemy.com/share/105oMs3@G41xj-jxTwM633M4qm4xzNMoy6DPmx6Xuc4YP5-iVOO2LmM4yMdA13iq5GLtgib4/