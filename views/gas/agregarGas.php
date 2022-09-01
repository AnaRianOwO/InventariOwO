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
		<a href="?c=gas" class="btn regresar">Regresar</a>
		<div class="container">
		<div class= "titulo">	
		<?php echo $data["titulo"]; ?>
		</div>
			<div class= "form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=gas&a=guarda" autocomplete="off">

					<div class="form-group campo_input">
						<label for="valorRecibo">Valor del recibo:</label>
						<input type="text" class="form-control input" id="valorRecibo" name="valorRecibo" placeholder="Sin $, puntos ni comas" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="consumo">Consumo:</label>
						<input type="textarea" class="form-control textarea" id="consumo" name="consumo" placeholder="m³" required></textarea>
					</div>

					<div class="form-group campo_input">
						<label for="fechaPago">Fecha de Pago:</label>
						<input type="date" class="form-control input" id="fechaPago" name="fechaPago" required/>
					</div>
				
					<button id="guardar" name="guardar" type="submit" class="btn guardar">Guardar</button>
				
				</form>
			</div>
		</div>
		
	</body>
</html>