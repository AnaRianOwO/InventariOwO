<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		<script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json" ></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
		<link rel="stylesheet" href="assets/css/estilola.css" class="stylesheet">
		<script type="text/javascript"> 
			$(document).ready( function () {
				$('#activacion').DataTable({
					language: {
						url: 'assets/js/es-ES.json'
					}
				});
			} );
		</script>
	</head>
	
	<body>
		<a href="?c=electricidad" class="btn regresar">Regresar</a>
		<div class="containertab">
			<div class="titulo"><?php echo $data["titulo"]; ?></div>
			<div class="table-responsive">
				<table border="1" width="80%" class="table display" name="activacion" id="activacion">
				<thead class="thead-dark">
						<tr class="table-primary">
							<th>Valor del recibo</th>
							<th>Consumo</th>
							<th>Fecha de pago</th>
							<th>Activar</th>
							<th>Eliminar definitivamente</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["electricidad"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["valorRecibo"]."</td>";
							echo "<td>".$dato["consumo"]."</td>";
							echo "<td>".$dato["fechaPago"]."</td>";
							echo "<td><a href='?c=electricidad&a=activar&id=".$dato["idRecibo"]."' class='btn activar'>Activar</a></td>";
							echo "<td><a href='?c=electricidad&a=eliminar&id=".$dato["idRecibo"]."' class='btn eliminar'>Eliminar</a></td>";
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
		<!--<script type="text/javascript">
			Swal.fire({
				toast: true,
				position: 'top-end',
				icon: 'info',
				text:'Bienvenido a la tabla de productos',
				confirmButtonText: '¡Vale!',
				backdrop: true,
			})
		</script>-->
	</body>
</html>