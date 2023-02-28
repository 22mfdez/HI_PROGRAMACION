
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lenguajes de Programación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto+Mono:wght@100;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Genos:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap');
        @keyframes title-animation {
            from {
                opacity: 0;
                transform: translateY(-10%);
            }
            to {
                opacity: 1;
                transform: translateY(0%);
            }
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
		.container1 {
			min-height: calc(100vh - 140px);
			padding: 20px;
		}

		.box {
			background-color: #8fdbe088;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
			padding: 20px;
			border-radius: 5px;
			margin-bottom: 20px;
		}
        .box:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px #ccc;
    }

		.box h2 {
			margin-top: 0;
			font-size: 20px;
            font-family: 'Roboto Mono', monospace;
		}

		.box p {
			margin: 0;
			font-size: 16px;
            font-family: 'Nunito', sans-serif;
			line-height: 1.5;
		}

		.box ul {
			margin: 0;
			padding: 0 0 0 20px;
			list-style: disc;
		}

		.box ul li {
			margin: 5px 0;
            font-family: 'Nunito', sans-serif;
		}

		.box:nth-child(1) {
			background-color: #ffe4e1;
		}

		.box:nth-child(2) {
			background-color: #e6e6fa;
		}
        a:hover {
        color: #666;
        text-decoration: underline;
    }
	</style>
<body>
    <?php 
    setcookie('ip',$_SERVER['REMOTE_ADDR']);
    setcookie('fecha',date("d-m-Y H:i:s"));
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">POSTEA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrar.php">Ver POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
	<header>
		<h1>Diferencias entre lenguajes de programación</h1>
	</header>
	<div class="container1">
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<h2>Lenguajes de programación orientada a objetos</h2>
					<p>Los lenguajes de programación orientada a objetos (OOP) se basan en el concepto de objetos, que son instancias de clases. Una clase es una plantilla o molde que define los atributos y métodos de un objeto. Algunos ejemplos de lenguajes OOP son Java, C++, Python y Ruby.</p>
					<ul>
						<li>Los objetos encapsulan datos y comportamiento.</li>
						<li>Las clases permiten la reutilización de código.</li>
						<li>La herencia y el polimorfismo son conceptos importantes en OOP.</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<h2>Lenguajes de programación a eventos</h2>
					<p>Los lenguajes de programación a eventos se basan en la programación orientada a eventos, que consiste en asociar una acción con un evento. Un evento puede ser cualquier cosa, desde hacer clic en un botón hasta mover el mouse. Algunos ejemplos de lenguajes a eventos son JavaScript, C# y Visual Basic.</p>
					<ul>
						<li>La lógica del programa se basa en eventos</li>
                        <li>El código se ejecuta en respuesta a eventos.</li>
						<li>Los manejadores de eventos son funciones que se llaman cuando ocurre un evento.</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<div class="box">
					<h2>Lenguajes de programación procedimentales</h2>
					<p>Los lenguajes de programación procedimentales se basan en la programación estructurada, que consiste en dividir un programa en bloques de código que realizan una tarea específica. Algunos ejemplos de lenguajes procedimentales son C, Pascal y Fortran.</p>
					<ul>
						<li>El programa se divide en bloques de código llamados funciones.</li>
						<li>Las funciones pueden tener argumentos y valor de retorno.</li>
						<li>El control del programa se realiza mediante estructuras de control, como condicionales y bucles.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap');
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

    
    </style>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>
</html>
