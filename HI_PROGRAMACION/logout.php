<?php
    session_start(); //Partiendo de la base de que estamos conectados
    if(isset($_POST['cerrar_sesion'])){
        session_destroy();
        header('location:login.php');
    }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Cerrar sesión</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f7f7;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 20px;
            color: #007bff;
            text-shadow: 2px 2px #ccc;
        }
        form {
            text-align: center;
            margin-top: 50px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Esperamos que vuelvas prontito, <?php echo $_SESSION['usuario']; ?></h2>
        <form method="POST" action="">
            <input type="submit" name="cerrar_sesion" value="Cerrar sesión">
        </form>
    </div>
</body>
</html>
