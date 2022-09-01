<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
		<link rel="stylesheet" href="assets/css/estilola.css" class="stylesheet">
		<script src="https://kit.fontawesome.com/fa4c5da296.js" crossorigin="anonymous"></script>
		<script> 
		$(document).ready( function () {
    		$('#productos').DataTable({
				language: {
         	   		url: 'assets/js/es-ES.json'
        		}
			});
		} );
		</script>
	</head>
	
	<body>
		<div>
		<a href="/casa"><i class="fa-solid fa-house fa-6x" style="color:chocolate"></i></a>
		</div>
		<div class="containertab">
			<div class="titulo"><?php echo $data["titulo"]; ?></div>
			<a href="?c=producto&a=nuevo" class="btn agregar"><i class="fa-solid fa-plus"></i>  Agregar</a>
			<a href="?c=producto&a=reporte" class="btn informe"><i class="fa-solid fa-file"></i>  Generar informe</a>
			<br />
			<br />
			<div class="table-responsive">
				<table border = "1" width="80%" class="table display" name="productos" id="productos">
					<thead class="thead-dark">
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Marca</th>
							<th>Lugar de compra</th>
							<th>Fecha de Vencimiento</th>
							<th>Presentación</th>
							<th>Stock</th>
							<th>Categoría</th>
							<th>Prioridad</th>
							<th>Precio</th>
							<th>Modificar</th>
							<th>Desactivar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["producto"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombreProducto"]."</td>";
							echo "<td>".$dato["descripcionProducto"]."</td>";
							echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["lugarDeCompra"]."</td>";
							echo "<td>".$dato["fechaVencimiento"]."</td>";
							echo "<td>".$dato["nombrePresentacion"]."</td>";
							echo "<td>".$dato["stock"]."</td>";
							echo "<td>".$dato["nombreCategoria"]."</td>";
							echo "<td>".$dato["nombrePrioridad"]."</td>";
							echo "<td>".$dato["precio"]."</td>";
							echo "<td><a href='?c=producto&a=modificar&id=".$dato["idProducto"]."' class='btn modificar'><i class='fa-solid fa-pen'></i></a></td>";
							echo "<td><a href='?c=producto&a=desactivar&id=".$dato["idProducto"]."' class='btn eliminar'><i class='fa-solid fa-trash-can'></i></a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
			<a href="?c=producto&a=activacion" class="btn desactivados">Productos desactivados</a>
		</div>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="assets/js/alertas.js"></script>
	</body>
</html>