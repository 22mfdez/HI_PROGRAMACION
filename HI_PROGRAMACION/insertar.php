<?php
include('conexion.php');

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$imagen = $_FILES['imagen']['name'];
$imagen_temp = $_FILES['imagen']['tmp_name'];

move_uploaded_file($imagen_temp, 'imagenes/' . $imagen);

$sql = "INSERT INTO hito (autor, titulo, contenido, imagen) VALUES ('$autor', '$titulo', '$contenido', '$imagen')";
if (mysqli_query($conexion, $sql)) {
    echo "Post publicado exitosamente";
} else {
    echo "Error al publicar el post: " . mysqli_error($conexion);
}

//CERRAMOS CONEXION A LA BASE DE DATOS
mysqli_close($conexion);
header('location:mostrar.php');
?>




