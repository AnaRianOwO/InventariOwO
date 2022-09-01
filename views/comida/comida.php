<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json" ></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
		<link rel="stylesheet" href="assets/css/estilola.css" class="stylesheet">
		<script src="https://kit.fontawesome.com/fa4c5da296.js" crossorigin="anonymous"></script>
		<script> 
		$(document).ready( function () {
    		$('#comidas').DataTable({
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
			<a href="?c=comida&a=nuevo" class="btn agregar">Agregar</a>
			<br />
			<br />
			<div class="table-responsive">
				<table border = "1" width="80%" class="table display" name="comidas" id="comidas">
					<thead class="thead-dark">
						<tr class="table-primary">
							<th>Total</th>
							<th>Tipo</th>
							<th>Cantidad</th>
							<th>Fecha de Compra</th>
							<th>Fecha de Terminación</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["comida"] as $dato) {
							echo "<tr>";
							echo "<td> $".$dato["valorComida"]."</td>";
							echo "<td> ".$dato["tipoComida"]."</td>";
							echo "<td>".$dato["cantidadComida"]." libra/s</td>";
							echo "<td>".$dato["fechaCompra"]."</td>";
							echo "<td>".$dato["fechaTerminacion"]."</td>";
							echo "<td><a href='?c=comida&a=modificar&id=".$dato["idComidaCats"]."' class='btn modificar'>Modificar</a></td>";
							echo "<td><a href='?c=comida&a=eliminar&id=".$dato["idComidaCats"]."' class='btn eliminar'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="assets/js/alertas.js"></script>
	</body>
</html>