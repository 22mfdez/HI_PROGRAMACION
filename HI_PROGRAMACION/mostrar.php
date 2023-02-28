
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">POSTEA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario.html">Publica tu POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrar.php">Ver POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
	<header>
		<h1>Ver POST más recientes</h1>
	</header>
	<div class="container">
	<div class="row">
    <?php
    include('conexion.php');
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location:login.php');
        exit();
    }
    $sql = "SELECT * FROM hito";
    $resultado = mysqli_query($conexion, $sql);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='col-md-4'>";
        echo "<div class='card mb-4'>";
        echo "<p class='card-publicacion'>" . $fila['id_publicacion'] . "</p>";
        echo "<div class='card-header bg-white font-weight-bold'>" . $fila['titulo'] . "</div>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>" . $fila['contenido'] . "</p>";
        echo "<p class='card-author'>" . $fila['autor'] . "</p>";
        echo "<a href='delete.php?id=".$fila['id_publicacion']."' class='btn btn-danger'>Eliminar</a>";
        echo "<a href='update.php?idu=".$fila['id_publicacion']."' class='btn btn-primary'>Editar</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    mysqli_close($conexion);
?>

	</div>
    </div>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap');
		.hover-shadow:hover {
			box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
		}
		.card-publicacion {
            align-items: center;
			background-color: #fff;
			border: 1px solid #d1d1d1;
			border-radius: 0.25rem;
			padding: 1rem;
			transition: all 0.3s ease-in-out;
		}
		.card-publicacion:hover {
			border: 1px solid #007bff;
		}
		.card-author {
			margin-top: 1rem;
			font-size: 0.8rem;
			color: #6c757d;
		}

		.card {
		border: 0;
		border-radius: 0.5rem;
		box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
		overflow: hidden;
		}

		.card-header {
		border-bottom: 1px solid rgba(0, 0, 0, 0.125);
		}

		.card-text {
		font-size: 1rem;
		line-height: 1.5;
		}

		@media (min-width: 768px) {
		.card-columns {
			column-count: 3;
			column-gap: 1.25rem;
		}
		}
      /* estilo para el elemento nav */
        nav {
        background-color: #4143505b; /* color de fondo */
        box-shadow: 0 2px 5px rgba(41, 40, 40, 0.507); /* sombreado */
        border-radius: 8px; /* borde redondeado */
        font-family: 'Orbitron', sans-serif;

        }

        /* estilo para los enlaces dentro del nav */
        .navbar-nav a {
        color: #fff; /* color del texto */
        text-decoration: none; /* quitar subrayado */
        padding: 0.5rem 1rem; /* espacio entre el texto y el borde */
        margin-right: 1rem; /* espacio entre los enlaces */
        transition: all 0.2s ease-in-out; /* transición suave */

        }

        /* estilo para los enlaces cuando se pasan el ratón por encima */
        .navbar-nav a:hover {
        color: #575552; /* color de texto en el hover */
        background-color: rgba(255, 255, 255, 0.1); /* color de fondo en el hover */
        border-radius: 0.5rem; /* borde redondeado en el hover */
        }

        /* estilo para el enlace activo */
        .navbar-nav .active a {
        color: #dda7dd; /* color de texto del enlace activo */
        background-color: rgba(255, 255, 255, 0.1); /* color de fondo del enlace activo */
        border-radius: 0.5rem; /* borde redondeado del enlace activo */
        }
        
		header {
            background-color: #f7f7f7;
            padding: 40px;
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            color: #333;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
            }
        h1{
            font-family: 'Montserrat Alternates', sans-serif;
            text-align: center;
            font-size: 50px;
        }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
