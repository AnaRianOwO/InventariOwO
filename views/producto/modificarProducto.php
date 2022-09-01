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
		<a href="?c=producto" class="btn regresar">Regresar</a>
		<div class="container">
			<div class="titulo">
			<?php echo $data["titulo"]; ?>
			</div>
			<div class="form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=producto&a=actualizar" autocomplete="off">
					
					<input type="hidden" id="idProducto" name="idProducto" value="<?php echo $data["idProducto"]; ?>" />
					
					<div class="form-group campo_input">
						<label for="nombreProducto">Nombre:</label>
						<input type="text" class="form-control input" id="nombreProducto" name="nombreProducto" value="<?php echo $data["producto"]["nombreProducto"]?>" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="descripcionProducto">Descripción:</label>
						<textarea type="textarea" class="form-control textarea" id="descripcionProducto" name="descripcionProducto" required><?php echo $data["producto"]["descripcionProducto"]?></textarea>
					</div>

					<div class="form-group campo_input">
						<label for="marca">Marca:</label>
						<input type="text" class="form-control input" id="marca" name="marca" value="<?php echo $data["producto"]["marca"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="lugarDeCompra">Lugar de compra:</label>
						<input type="text" class="form-control input" id="lugarDeCompra" name="lugarDeCompra" value="<?php echo $data["producto"]["lugarDeCompra"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaVencimiento">Fecha de vencimiento:</label>
						<input type="date" class="form-control input" id="fechaVencimiento" name="fechaVencimiento" value="<?php echo $data["producto"]["fechaVencimiento"]?>" required/>
					</div>

					<div class="form-group campo_input">
						<label for="Presentacion">Presentación:</label>
						<div class="costum_select">
							<select name="idPresentacion" id="idPresentacion" autocomplete="off" required>
							<option value="Null" <?php if ('Null' == $data["producto"]['idPresentacion']) { echo 'selected'; } ?>>Seleccione la presentación del producto</option>
								<?php  foreach($data["presentacion"] as $dato) {?>
									<option value="<?php echo $dato["idPresentacion"]?>" <?php
									if ($dato["idPresentacion"] == $data["producto"]["idPresentacion"]) {
										echo "selected"; } ?> >
									<?php echo $dato["nombrePresentacion"]."</option>";} ?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="stock">Stock:</label>
						<input type="text" class="form-control input" id="stock" name="stock" value="<?php echo $data["producto"]["stock"]?>" required/>
					</div>
					
					<div class="form-group campo_input">
						<label for="Categoria">Categoria:</label>
						<div class="costum_select">
							<select name="idCategoria" id="idCategoria" autocomplete="off" required>
							<option value="Null" <?php if ('Null' == $data["producto"]['idCategoria']) { echo 'selected'; } ?>>Seleccione la categoria del producto</option>
								<?php  foreach($data["categoria"] as $dato) {?>
									<option value="<?php echo $dato["idCategoria"]?>" <?php
									if ($dato["idCategoria"] == $data["producto"]["idCategoria"]) {
										echo "selected"; } ?> >
									<?php echo $dato["nombreCategoria"]."</option>";} ?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="Prioridad">Prioridad:</label>
						<div class="costum_select">
							<select name="idPrioridad" id="idPrioridad" autocomplete="off" required>
							<option value="Null" <?php if ('Null' == $data["producto"]['idPrioridad']) { echo 'selected'; } ?>>Seleccione la prioridad del producto</option>
								<?php  foreach($data["prioridad"] as $dato) {?>
									<option value="<?php echo $dato["idPrioridad"]?>" <?php
									if ($dato["idPrioridad"] == $data["producto"]["idPrioridad"]) {
										echo "selected"; } ?> >
									<?php echo $dato["nombrePrioridad"]."</option>";} ?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="precio">Precio:</label>
						<input type="text" class="form-control input" id="precio" name="precio" value="<?php echo $data["producto"]["precio"]?>" required/>
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