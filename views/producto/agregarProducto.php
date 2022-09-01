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
		<a href="?c=producto" class="btn regresar">Regresar</a>
		<div class="container">
		<div class= "titulo">	
		<?php echo $data["titulo"]; ?>
		</div>
			<div class= "form">
				<form id="nuevo" name="nuevo" method="POST" action="?c=producto&a=guarda" autocomplete="off">

					<div class="form-group campo_input">
						<label for="nombreProducto">Nombre:</label>
						<input type="text" class="form-control input" id="nombreProducto" name="nombreProducto" required autofocus/>
					</div>
					
					<div class="form-group campo_input">
						<label for="descripcionProducto">Descripción:</label>
						<textarea type="textarea" class="form-control textarea" id="descripcionProducto" name="descripcionProducto" placeholder="Características" required></textarea>
					</div>

					<div class="form-group campo_input">
						<label for="marca">Marca:</label>
						<input type="text" class="form-control input" id="marca" name="marca" required/>
					</div>

					<div class="form-group campo_input">
						<label for="lugarDeCompra">Lugar de compra:</label>
						<input type="text" class="form-control input" id="lugarDeCompra" name="lugarDeCompra" required/>
					</div>

					<div class="form-group campo_input">
						<label for="fechaVencimiento">Fecha de vencimiento:</label>
						<input type="date" class="form-control input" id="fechaVencimiento" name="fechaVencimiento" required/>
					</div>
					
					<div class="form-group campo_input">
						<label for="Presentacion">Presentación:</label>
						<div class="costum_select">
							<select name="idPresentacion" id="idPresentacion" required>
								<option value="Null">Seleccione la presentación</option>
								<?php foreach($data["presentacion"] as $dato) {
									echo "<option value=".$dato["idPresentacion"].">".$dato["nombrePresentacion"]."</option>";
								}?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="Stock">Stock:</label>
						<input type="number" class="form-control input" id="stock" name="stock" required/>
					</div>

					<div class="form-group campo_input">
						<label for="Categoria">Categoria:</label>
						<div class="costum_select">
							<select name="idCategoria" id="idCategoria" required>
								<option value="Null">Seleccione la categoria</option>
								<?php foreach($data["categoria"] as $dato) {
									echo "<option value=".$dato["idCategoria"].">".$dato["nombreCategoria"]."</option>";
								}?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="Prioridad">Prioridad:</label>
						<div class="costum_select">
							<select name="idPrioridad" id="idPrioridad" required>
								<option value="Null">Seleccione la prioridad</option>
								<?php foreach($data["prioridad"] as $dato) {
									echo "<option value=".$dato["idPrioridad"].">".$dato["nombrePrioridad"]."</option>";
								}?>
							</select>
						</div>
					</div>

					<div class="form-group campo_input">
						<label for="Precio">Precio Unitario:</label>
						<input type="text" class="form-control input" id="precio" name="precio" required/>
					</div>
					
					<button id="guardar" name="guardar" type="submit" class="btn guardar">Guardar</button>
				
				</form>
			</div>
		</div>
		
	</body>
</html>