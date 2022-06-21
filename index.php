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
    <style>
    
    /* CSS Responsive */    
        
    @media screen and (max-width: 700px){
        
            .titulo {
                width: 270%;
            }
            .b {
                width: 310%;
            }
            hr {
                width: 305%;
            }
            .collage {
                width: 293%;
            }
            .bienvenida {
                width: 293%;
            }
            .session {
                width: 293%;
            }
        }
    body {
            margin-left: 2%; /* Margen con el lado izquierdo */
            margin-right: 2%; /* Margen con el lado derecho */
            margin-top: 2%; /* Margen con la parte de arriba */
            margin-bottom: 2%; /* Margen con la parte de abajo */
            font-family: Arial Black; /* Tipo de letra */
        }
        
        .titulo {
            padding: 50px; /* padding */
            background-color: #CBD9FC; /* color de fondo */
            border-top: 5px solid #0A4AEC; /* borde de arriba */
        }
        .titulo img {
            float: left; /* desplazamiento a la derecha */
            margin-right: 20px; /* margen derecho */
            margin-bottom: 20px; /* margen de abajo */
        }
        .titulo p {
            font-family: Arial Black; /* tipo de letra */ 
            font-size: 40px; /* tamaño de la letra */
            color: #0A4AEC; /* color de la letra */
            text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000; /* para darle sombra al texto */ 
        }
        input[type=submit] {
            background-color: #0A4AEC; /* color de fondo */
            border: none; /* Borde */
            color: white; /* Color de la letra */
            padding: 7px 16px; /* padding */
            text-decoration: none; /* Formato de texto */
            margin: 4px 2px; /* Margen */
            cursor: pointer; /* Tipo de cursor */
            font-family: Arial; /* tipo de letra */
        }
        input[type=text] {
            width: 40%; /* Ancho */
            padding: 8px 16px; /* padding */
            margin: 8px 0; /* margen */
            box-sizing: border-box; /* Modelo de la caja */
            font-family: Arial; /* tipo de letra */
        }
        .b {
            font-family: Arial;
            background-color: #CBD9FC;
            text-align: center;
        }
        .nav {
            font-family: Arial; /* tipo de letra */
            margin: 0; /* margen */
            padding: 0; /* padding */
        }
        ul, ol {
				list-style:none; /* estilo de lista */
			}
			
			.nav > li {
				float:left; /* desplazamiento a la izquierda */
			}
			
			.nav li a {
				background-color:#0B3192; /* color de fondo */
				color:#fff; /* color de texto */
				text-decoration:none; /* formato de texto */
				padding:10px 12px; /* padding */
				display:block; /* estructura en bloque */
			}
			
			.nav li a:hover {
				background-color:#254DB3; /* color de fondo */
			}
			
			.nav li ul {
				display:none; /* sin estructura */
				position:absolute; /* posición absoluta */
				min-width:140px; /* ancho mínimo */
                padding-left: 0; /* padding lado izquierdo */
			}
			
			.nav li:hover > ul {
				display:block; /* estructura en bloque */
			}
			
			.nav li ul li {
				position:relative; /* posición relativa */
			}
			
			.nav li ul li ul {
				right:-140px; /* derecha */
				top:0px; /* arriba */
			}
        .session {
            text-align: center; /* alineación del texto centrada */
            font-size: 23px; /* tamaño de la letra */
        }
        .bienvenida {
            text-align: center; /* alineación de texto centrado */
            font-size: 23px; /* tamaño de la letra */
        }
        img {
            text-align: center; /* alineación de texto centrado */
        }
        .collage {
            text-align: center; /* alineación de texto centrado */
        }
    
    </style>
</head>
    
<body>
    
<hr />
    
    <div align="middle" class="titulo"><a href="index.php"><img src="imagenes/logo.png" width="275px" height="200px"></a><p>Computer Design</p>
    
    <!-- Formulario para realizar una búsqueda de palabras clave -->     
        
    <form action="buscador.php" method="POST">
        <b><br>Palabras clave:<br></b>
        <input type="text" id="buscador" name="buscador" placeholder="Buscar en Computer Design" size="30" maxlength="30">
        <input type="submit" name="search" id="search" value="🔍">
    </form>
    
    </div>
        
        <hr />
    
         <!-- Creación del menú -->
        
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
            
            //Para conectarse a la base de datos
            
            require("conexion.php");
            
            //Si existe sesión
    
            if (! empty($_SESSION['nombre'])) 
                {
                    $nombre=$_SESSION['nombre'];
                
                    //Consultamos que el nombre y el tipo de puesto coincida con el de Administrador
                
                    $datos="SELECT * FROM empleados WHERE emp_nombre like '$nombre' and emp_tipo_puesto like 'Administrador'";
                    $resultados=mysqli_query($conexion,$datos);
                    $fila=mysqli_fetch_array($resultados,MYSQLI_BOTH);
                
                //Si coincide con la anterior consulta mostrará la opción de botón de Administrador en el menú
                
                if($fila[11]=="Administrador")
                    {
                        echo "<li><a href='administrador/principal.php'>Administrador</a>";
                }
                    
             }
           
            
            
            if(! empty($_SESSION['idusu'])){
            
            $id=$_SESSION['idusu'];    
                
            //Consultamos la última factura del usuario que tiene iniciada la sesión
            
            $consulta4="SELECT MAX(fac_id) FROM facturas WHERE usu_id LIKE '$id'";
            $resultado4=mysqli_query($conexion, $consulta4);
            $fila4=mysqli_fetch_array($resultado4,MYSQLI_BOTH);
            
            //Consultamos la cantidad de la tabla carrito donde el id de factura sea el de la consulta anterior
            
            $consulta="SELECT carr_cantidad FROM carrito WHERE fac_id like '$fila4[0]'";
            $resultado=mysqli_query($conexion,$consulta);
                
                
            //Con el while conseguimos la cantidad de productos que tenemos en el carrito
            
            //Mientras existan filas
            
            while($fila1=mysqli_fetch_array($resultado,MYSQLI_BOTH)){
            
            //Si existe sum, tomará como valor la suma que tomó en el else + la nueva fila de otro producto que hayamos añadido 
                
            if (! empty($sum)){
                $sum=$fila1[0]+$sum;

            }
                
            //Si no existe sum tendrá como valor 0 y luego sum tendrá el valor de la suma de cada fila que exista de la columna cantidad en el carrito + 0    
                
            else {
                $sum=0;
                $sum=$fila1[0]+$sum;
            }
                
            }
            }
        ?>  
            
                <!-- Con el siguiente php que aperece hacemos que en el menú, apartado Mi carrito, aparezca la suma anterior, es decir, la cantidad de productos que el usuario tiene almacenados en el carrito -->
            
				<li><a href="carrito/micarrito.php">Mi carrito <?php if(! empty($sum)){echo "(".$sum.")";} ?> </a></li>
				<li><a href="inicio sesion/micuenta.php">Mi cuenta</a>
                    <?php
                    
                        //Si existe sesión, nos añadirá en el menú, apartado Mi cuenta, las opciones de cerrar sesión y consultar las facturas del usuario que ha iniciado la sesión
                    
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
        
            //Si existe sesión, nos dará la bienvenida con el nombre con el que se registró el usuario
        
            if (! empty($_SESSION['nombre'])) 
                {
                    echo "<br><br><p class='bienvenida'>Bienvenido/a <strong>".$_SESSION['nombre']."</strong></p><br><br>";
            }
        
                //Si no existe, nos dará un mensaje de que no tenemos iniciada la sesión y que entremos en el apartado Mi cuenta
        
                else {
                    echo "<br><br><p class='session'>No has iniciado sesión.<br> Entre en <a href='inicio sesion/micuenta.php'> Mi cuenta</a></p><br><br>";
                }
        ?>
        <div class="collage">
        <p>En nuestra tienda online encontrarás de todas las categorías en productos de informática</p><br><br>
        <img src="imagenes/collage.jpg" width="575px" height="500px"></div>
        
            <br><br><br><br>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://espai.es"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logotipo-facebook.png" width="40px" height="20px">Compartir en Facebook</a><br>
    
    <a href="https://twitter.com/intent/tweet?text= escola%20inform%C3%A1tica%20i%20disseny&url=https://espai.es&hashtags=dissenyweb"><img src="https://logos-marcas.com/wp-content/uploads/2020/04/Twitter-Logo.png" width="40px" height="20px">Compartir en Twitter</a><br>
    
    <a href="https://api.whatsapp.com/send?text=escola%20inform%C3%A1tica%20i%20disseny%20https://espai.es"><img src="https://1000marcas.net/wp-content/uploads/2019/11/WhatsApp-logo.png" width="40px" height="20px">Compartir en Whatsapp</a><br>
    
    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://espai.es"><img src="https://logos-marcas.com/wp-content/uploads/2020/04/Linkedin-s%C3%ADmbolo.png" width="40px" height="20px">Compartir en Linkedln</a><br><br><br>
    
    <div class="b"><br><br>
		<b>Copyright Computer Design &copy; <?=date("Y")?><br>
        📧 computerdesign@gmail.com<br>
		Atención al cliente: ☎ +34 956 34 87 92</b><br><br><br></div>
	
</body>
</html>