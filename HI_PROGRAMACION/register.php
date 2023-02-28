<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script>
		function mostrarMensaje() {
		  alert("Se ha registrado correctamente correctamente.");
		}
		</script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@500;600&display=swap');
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

      .container2 {
        min-height: calc(100vh - 140px);
        padding: 20px;
        

        }
      form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #d1a1bf6e;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease;
            font-family: 'Dosis', sans-serif;
            }

        input[type="text"],
        textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        input[type="email"],
        textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        input[type="password"],
        textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }

        button[type="submit"] {
        background-color: #9379978a;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }

        .form-group button[type="submit"]:hover {
			  background-color: #76797c;
		}

        @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }
</style>
</head>
  <body>
  <?php
    include('conexion.php');
        if(isset($_POST['enviar'])){
            $usuario = $_POST['user'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    


    
    $sql = "INSERT INTO usuarios (usuario, email, contraseña) VALUES ('$usuario', '$email', '$pass')";
    mysqli_query($conexion, $sql);
    
    header('location:login.php');
        }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">POSTEA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                  <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Acerca de</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="register.php">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar Sesion</a>
                </li>
          </ul>
      </div>
  </nav>
	<div class="container2">
		<form action="" method="post" onsubmit="mostrarMensaje()" class="form-box">
			<h2>Registro</h2>
			<div class="form-group">
				<label for="autor">Usuario</label>
				<input type="text" name="user" id="autor" required>
			</div>
			<div class="form-group">
				<label for="titulo">Email</label>
				<input type="email" name="email" id="titulo" required>
			</div>
			<div class="form-group">
				<label for="contenido">Password</label>
				<input type="password" name="pass" id="autor" required>
			</div>

			<button type="submit" name="enviar" >Publicar</button>
		</form>
	</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
			
