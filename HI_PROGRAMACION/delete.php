
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminar publicación</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-danger text-white">
						<h4>Eliminar publicación</h4>
					</div>
					<div class="card-body">
						<p>¿Estás seguro de que deseas eliminar esta publicación?</p>
						<form action="delete.php" method="get">
							<input type="hidden" name="id" value="<?php echo $id_publicacion; ?>">
							<button type="submit" class="btn btn-danger">Sí, eliminar publicación</button>
							<a href="mostrar.php" class="btn btn-secondary">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
        include('conexion.php');
        $id_publicacion = $_GET['id'];
        $sql = "DELETE FROM hito WHERE id_publicacion = '$id_publicacion'";
        if (mysqli_query($conexion, $sql)) {
            echo "Publicación eliminada con éxito";
        } else {
            echo "Error al eliminar la publicación: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
        header('location:mostrar.php');
        ?>
</body>
</html>


