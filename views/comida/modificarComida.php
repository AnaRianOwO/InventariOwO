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
		<a href="?c=comida" class="btn regresar">Regresar</a>
		<div class="container">
			<div class="titulo">
			<?php echo $data["titulo"]; ?>
			</div>
			<div class="form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=comida&a=actualizar" autocomplete="off">
					
					<input type="hidden" id="idComidaCats" name="idComidaCats" value="<?php echo $data["idComidaCats"]; ?>" />
					
					<div class="form-group campo_input">
						<label for="valorComida">Total:</label>
						<input type="text" class="form-control input" id="valorComida" name="valorComida" value="<?php echo $data["comida"]["valorComida"]?>" required autofocus/>
					</div>

					<div class="form-group campo_input">
						<label for="tipoComida">Tipo comida:</label>
						<input type="text" class="form-control input" id="tipoComida" name="tipoComida" value="<?php echo $data["comida"]["tipoComida"]?>" required/>
					</div>
					
					<div class="form-group campo_input">
						<label for="cantidadComida">Cantidad:</label>
						<input type="text" class="form-control input" id="cantidadComida"  name="cantidadComida" value="<?php echo $data["comida"]["cantidadComida"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaCompra">Fecha de Compra:</label>
						<input type="date" class="form-control input" id="fechaCompra" name="fechaCompra" value="<?php echo $data["comida"]["fechaCompra"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaTerminacion">Fecha de Terminación:</label>
						<input type="date" class="form-control input" id="fechaTerminacion" name="fechaTerminacion" value="<?php echo $data["comida"]["fechaTerminacion"]?>" required/>
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