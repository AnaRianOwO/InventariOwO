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
		<a href="?c=arena" class="btn regresar">Regresar</a>
		<div class="container">
			<div class="titulo">
			<?php echo $data["titulo"]; ?>
			</div>
			<div class="form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=arena&a=actualizar" autocomplete="off">
					
					<input type="hidden" id="idArenaCats" name="idArenaCats" value="<?php echo $data["idArenaCats"]; ?>" />
					
					<div class="form-group campo_input">
						<label for="totalArena">Total:</label>
						<input type="text" class="form-control input" id="totalArena" name="totalArena" value="<?php echo $data["arena"]["totalArena"]?>" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="cantidadArena">Cantidad:</label>
						<textarea type="text" class="form-control textarea" id="cantidadArena" name="cantidadArena" required><?php echo $data["arena"]["cantidadArena"]?></textarea>
					</div>

					<div class="form-group campo_input">
						<label for="fechaCompra">Fecha de Compra:</label>
						<input type="date" class="form-control input" id="fechaCompra" name="fechaCompra" value="<?php echo $data["arena"]["fechaCompra"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaTerminacion">Fecha de Terminación:</label>
						<input type="date" class="form-control input" id="fechaTerminacion" name="fechaTerminacion" value="<?php echo $data["arena"]["fechaTerminacion"]?>" required/>
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