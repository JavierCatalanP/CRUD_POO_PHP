<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>

<body>

<?php  
    
    include "modulos/menu.php";

?>

<section>

	<?php 
        $rutas = new RutasControlador(); // instanciamos la clase
        $rutas -> Rutas(); // llamamos al metodo

	?>

</section>
	
</body>

</html>