<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="assets/css/estilola.css" class="stylesheet">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	
	<body>
		<a href="?c=internet" class="btn regresar">Regresar</a>
		<div class="container">
			<div class="titulo">
			<?php echo $data["titulo"]; ?>
			</div>
			<div class="form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=internet&a=actualizar" autocomplete="off">
					
					<input type="hidden" id="idRecibo" name="idRecibo" value="<?php echo $data["idRecibo"]; ?>" />
					
					<div class="form-group campo_input">
						<label for="valorRecibo">Nombre:</label>
						<input type="text" class="form-control input" id="valorRecibo" name="valorRecibo" value="<?php echo $data["internet"]["valorRecibo"]?>" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="consumo">Consumo:</label>
						<input type="text" class="form-control input" id="consumo" name="consumo" value="<?php echo $data["internet"]["consumo"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaPago">Fecha de Pago:</label>
						<input type="date" class="form-control input" id="fechaPago" name="fechaPago" value="<?php echo $data["internet"]["fechaPago"]?>" required/>
					</div>

					
					<button id="guardar" name="guardar" type="submit" class="btn guardar">Guardar</button>
					
				</form>
			</div>
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    	<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
		<script src="assets/js/alertas.js"></script>
	</body>
</html>		