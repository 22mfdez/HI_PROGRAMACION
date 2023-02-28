<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      h1 {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
      margin-top: 50px;
      margin-bottom: 20px;
      color: pink;
      text-shadow: 2px 2px #ccc;
    }

    .form-box {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: none;
    }

    button[type="submit"] {
      display: block;
      margin: 20px auto 0;
      padding: 10px 20px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0062cc;
    }
</style>
  </head>
  <body>
    <h1>Edita tu post</h1>
<form action="" method="post" class="form-box">
    <input type="hidden" name="id_publicacion" value="<?php echo $fila['id_publicacion']; ?>">
    <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" rows="6" required></textarea>
    </div>
    <button name="enviar" type="submit">Actualizar</button>
</form>
    <?php
        include('conexion.php');
        if(isset($_POST['enviar'])){
            $sql = "UPDATE hito SET contenido = '".$_POST['contenido']."' WHERE id_publicacion =".$_GET['idu']."";
            $resultado = mysqli_query($conexion, $sql);
            header('location:mostrar.php');

            
        }
        ?>
           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


