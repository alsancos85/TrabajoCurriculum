<?php

$servidor = "db5014890765.hosting-data.io";
$usuario = "dbu2502229";
$contraseña = "Alberto_1985.";
$BD = "dbs12369947";
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if ($conexion->connect_error) {
    die('<strong>No pudo conectarse:</strong> ' . $conexion->connect_error);
}

$nav_bar='<ul class="nav">
				<li><a href="llamada2.php">Sobre mí</a></li>
				<li><a href="">Estudios y habilidades </a>
						
						</li>
						
				
				<li><a href="">Experiencia</a>
				
				</li>
				<li><a href="">Configuracion</a>
					<ul>
						<li><a href="config.php">Cambiar datos</a></li>
						<li><a href="">Crear nuevo perfil</a></li>
						<li><a href="cerrar.php">Cerrar sesión</a></li>

					</ul>
				</li>
			</ul>


';

?>