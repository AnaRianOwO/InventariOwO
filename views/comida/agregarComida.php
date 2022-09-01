<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="assets/css/estilola.css" class="stylesheet">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	
	<body>
		<a href="?c=comida" class="btn regresar">Regresar</a>
		<div class="container">
		<div class= "titulo">	
		<?php echo $data["titulo"]; ?>
		</div>
			<div class= "form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=comida&a=guarda" autocomplete="off">

					<div class="form-group campo_input">
						<label for="valorComida">Total:</label>
						<input type="text" class="form-control input" id="valorComida" name="valorComida" placeholder="Total compra" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="tipoComida">Tipo comida:</label>
						<input type="text" class="form-control input" id="tipoComida" name="tipoComida" placeholder="Whiskas, Cachow, Mirringo..." required autofocus/>
					</div>

					<div class="form-group campo_input">
						<label for="cantidadComida">Cantidad:</label>
						<textarea type="textarea" class="form-control textarea" id="cantidadComida" name="cantidadComida" placeholder="Libras" required></textarea>
					</div>

					<div class="form-group campo_input">
						<label for="fechaCompra">Fecha de Compra:</label>
						<input type="date" class="form-control input" id="fechaCompra" name="fechaCompra" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaTerminacion">Fecha de terminación:</label>
						<input type="date" class="form-control input" id="fechaTerminacion" name="fechaTerminacion"/>
					</div>
										
					<button id="guardar" name="guardar" type="submit" class="btn guardar">Guardar</button>
				
				</form>
			</div>
		</div>
		
	</body>
</html>