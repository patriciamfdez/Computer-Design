<!DOCTYPE html>
<?php

session_start();

?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Design</title>
    <link rel="shortcut icon" href="imagenes/logo.ico">
    <style type="text/css">
        @media screen and (max-width: 700px){
        
            .titulo {
                width: 280%;
            }
            .b {
                width: 317%;
            }
            hr {
                width: 315%;
            }
            .bienvenida {
                width: 285%;
        }
        }
        body {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2%;
            margin-bottom: 2%;
            font-family: Arial Black;
        }
        .titulo {
            padding: 50px;
            background-color: #CBD9FC;
            border-top: 5px solid #0A4AEC;
        }
        .titulo img {
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
        }
        .titulo2 {
            background-color: #FFFFFF;
            text-align: center; 
            font-family: Arial; 
            font-weight:bold; 
            font-size: 30px; 
            color: #00E5F5; 
            text-shadow: -1px 0 #414D68, 0 1px #414D68, 1px 0 #414D68, 0 -1px #414D68, -2px 2px 0 #414D68, 2px 2px 0 #414D68, 1px 1px #414D68, 2px 2px #414D68, 3px 3px #414D68, 4px 4px #414D68, 5px 5px #414D68;
        }
        .titulo p {
            font-family: Arial Black; 
            font-size: 40px;
            color: #0A4AEC;
            text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000; 
        }
        input[type=submit] {
            background-color: #0A4AEC;
            border: none;
            color: white;
            padding: 7px 16px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-family: Arial;
        }
        input[type=text] {
            width: 40%;
            padding: 8px 16px;
            margin: 8px 0;
            box-sizing: border-box;
            font-family: Arial;
        }
        .b {
            font-family: Arial;
            background-color: #CBD9FC;
            text-align: center;
        }
        .nav {
            font-family: Arial;
            margin: 0;
            padding: 0;
        }
        ul, ol {
				list-style:none;
		}
			
		.nav > li {
			float:left;
		}
			
		.nav li a {
			background-color:#0B3192;
			color:#fff;
			text-decoration:none;
			padding:10px 12px;
			display:block;
		}
			
		.nav li a:hover {
			background-color:#254DB3;
		}
			
		.nav li ul {
			display:none;
			position:absolute;
			min-width:140px;
            padding-left: 0;
		}
			
		.nav li:hover > ul {
			display:block;
		}
			
		.nav li ul li {
			position:relative;
		}
			
		.nav li ul li ul {
			right:-140px;
			top:0px;
		}
        .imagen {
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 30px;
        }
        .informacion {
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 30px;
            padding-top: 20px;
            font-family: Arial;
        }
        .session {
            text-align: center;
        }
        .footer {
            background-color: #CBD9FC;
            padding-left: 10px;
        }
        .bienvenida {
            text-align: center;
        }
    </style>
</head>

<body>
    
<hr />
    
    <div align="middle" class="titulo"><a href="index.php"><img src="imagenes/logo.png" width="275px" height="200px"></a><p>Computer Design</p> 
        
    <form action="buscador.php" method="POST">
        <b><br>Palabras clave:<br></b>
        <input type="text" id="buscador" name="buscador" placeholder="Buscar en Computer Design" size="30" maxlength="30">
        <input type="submit" name="search" id="search" value="🔍">
    </form>
    
    </div>
        
        <hr />
    
        <ul class="nav">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="categorias/categorias.php">Categorías</a>
					<ul>
						<li><a href="categorias/componentes.php">Componentes</a>
                            <ul>
								<li><a href="subcategorias/placabase.php">Placas base</a></li>
								<li><a href="subcategorias/procesadores.php">Procesadores</a></li>
                                <li><a href="subcategorias/discosduros.php">Discos duros</a></li>
								<li><a href="subcategorias/tarjetasgraficas.php">Tarjetas gráficas</a></li>
                                <li><a href="subcategorias/memoriaram.php">Memorias RAM</a></li>
							</ul>
                        </li>
						<li><a href="categorias/perifericos.php">Periféricos</a>
                            <ul>
								<li><a href="subcategorias/monitores.php">Monitores</a></li>
								<li><a href="subcategorias/teclados.php">Teclados</a></li>
                                <li><a href="subcategorias/ratones.php">Ratones</a></li>
								<li><a href="subcategorias/auriculares.php">Auriculares</a></li>
							</ul>
                        </li>
						<li><a href="categorias/consolasygaming.php">Consolas y Gaming</a>
                            <ul>
								<li><a href="subcategorias/consolas.php">Consolas</a></li>
								<li><a href="subcategorias/juegos.php">Juegos</a></li>
							</ul>
                        </li>
						<li><a href="categorias/ordenadores.php">Ordenadores</a>
							<ul>
								<li><a href="subcategorias/portatiles.php">Portátiles</a></li>
								<li><a href="subcategorias/pc.php">PCs</a></li>
							</ul>
						</li>
					</ul>
				</li>
            
            <?php
            require("conexion.php");
    
            if (! empty($_SESSION['nombre'])) 
                {
                    $nombre=$_SESSION['nombre'];
                
                    $datos="SELECT * FROM empleados WHERE emp_nombre like '$nombre' and emp_tipo_puesto like 'Administrador'";
                    $resultados=mysqli_query($conexion,$datos);
                    $fila=mysqli_fetch_array($resultados,MYSQLI_BOTH);
                
                if($fila[11]=="Administrador")
                    {
                        echo "<li><a href='administrador/principal.php'>Administrador</a>";
                }
      
             }
           
            $id=$_SESSION['idusu'];
            
            $consulta4="SELECT MAX(fac_id) FROM facturas WHERE usu_id LIKE '$id'";
            $resultado4=mysqli_query($conexion, $consulta4);
            $fila4=mysqli_fetch_array($resultado4,MYSQLI_BOTH);
            
            $consulta="SELECT carr_cantidad FROM carrito WHERE fac_id like '$fila4[0]'";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($fila1=mysqli_fetch_array($resultado,MYSQLI_BOTH)){
                
            if (! empty($sum)){
                $sum=$fila1[0]+$sum;

            }
            else {
                $sum=0;
                $sum=$fila1[0]+$sum;
            }
                
            }
            
        ?>
            
				<li><a href="carrito/micarrito.php">Mi carrito <?php if(! empty($sum)){echo "(".$sum.")";} ?> </a></li>
				<li><a href="inicio sesion/micuenta.php">Mi cuenta</a>
                    <?php
                        if (! empty($_SESSION['nombre'])){
                            
                            echo "<ul>
                            
                                    <li><a href='inicio sesion/cerrarsesion.php'>Cerrar sesión</a></li>
                                    <li><a href='facturas/facturas.php'>Mis facturas</a></li>
                                    
                                  </ul>";
                            
                        }
                    ?>
                </li>
                    
			</ul>
        
        <br><br><br>
        
        <?php
        
        //Si se ha pulsado el botón de buscar
        
        if (isset($_POST['search'])) {
            
            
            //Recogemos las claves enviadas
            
            $buscador = $_POST['buscador'];
        
            //Consulta para seleccionar las columnas para mostrar el producto que en su descripción contenga la palabra clave buscada en el buscador
            
            $consulta3 = "SELECT pro_imagenes, pro_descripcion, pro_precio, pro_existencias, pro_id FROM productos WHERE pro_descripcion LIKE '%" . $buscador . "%'";
            $resultado3=mysqli_query($conexion,$consulta3);
            
            //Contamos las filas de la consulta anterior
            
            $count = mysqli_num_rows($resultado3);
            
            //Si hay resultados
            
            if ($count > 0) {

                echo '<h4>Se han encontrado '.$count.' resultado/s.</h4>';
        
            if (! empty($_SESSION['nombre'])){
                echo "<br><div class='bienvenida'>Estos son los resultados de su búsqueda:</div><br>";
            }
    
            else{
                echo "<br><p class='session' >Necesitas iniciar la sesión para añadir productos al carrito</p><br>";
            }

            $contador=0;
    
                            echo "<table style='text-align: center; width: 100%; border: 2px solid black;'><br>
    
                        <tbody>";
                                
                                    //Con esta estructura de while nos mostrará los productos con la informacón que seleccionamos en la anterior consulta. Las condiciones de if que contienen la variable contador sirven para que se nos muestre 3 productos por fila
                            
                                    while($fila3 = mysqli_fetch_array($resultado3)){
                                        if($contador==0){
                                            echo "<tr>";
                                        }
                                        
                                        if($contador<=4){
                                            echo " 
                                            <td><br><br><div class='imagen'><img style='width: 200px; height: 200px;' src='productos/$fila3[0]'></div><div class='informacion'>
                                            ".$fila3[1]."<br>
                                            Precio: ".$fila3[2]."€<br>";
                                            if($fila3[3]<=0){
                                                echo "No quedan unidades";
                                            }
                                            else{
                                                if (! empty($_SESSION['nombre'])){
                                               echo  
                                               $fila3[3]." unidades disponibles<br><br>
                                               
                                            <form action='carrito/carrito.php' method='post' name='agregarrpro'>
                                            <input id='cantidad' name='cantidad' min='1' value='1' max='$fila3[3]' class='cantidad' type='number'><br><br>
                                            <input type='hidden' name='idpro' value='$fila3[4]'><input type='submit' value='Agregar al carrito'>
                                            </form></div><br>";
                                                
                                                }
                                            }
                                            
                                            
                                            echo "
                                            
                                            </td>";
                                            $contador++;
                                        }
                                 if($contador>2){
                                     echo "</tr>";
                                     $contador=0;
                                 }
                            }
                            
                                echo
                                    "</tbody>
                                     </table><br>";
        
            }
            else {
            
            //Si no hay registros encontrados
            
            echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
            }
            
        }  
    
    ?>
        
            <div class="b"><br><br>
		<b>Copyright Computer Design &copy; <?=date("Y")?><br>
        📧 computerdesign@gmail.com<br>
		Atención al cliente: ☎ +34 956 34 87 92</b><br><br><br></div>
</body>
</html>