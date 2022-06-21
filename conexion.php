<html>
<body>
    
    <!-- Este php sirve para conectarnos con la base de datos -->
    
	<?php
    
        //Creación de variables para darles el valor de la dirección, nombre, usuario y contraseña de la base de datos
    
		$direccionbd="localhost:3306";
		$nombrebd="DU2XhsVg6v";
		$usuariobd="pMaldonado";
		$contrasena="HUEL84FRcG_1";
		
        //Con esta variable creada conseguimos la conexión a la base de datos gracias a las variables creadas anteriormente
    
		$conexion=mysqli_connect($direccionbd, $usuariobd, $contrasena, $nombrebd);
		
	?>
</body>
</html>