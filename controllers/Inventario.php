<?php 
	class InventarioController {

		public function __construct(){
			require_once "models/InventarioModel.php";
		}

		public function index(){
			$inventario = new Inventario_model();
			$data["titulo"] = "Inventario";
			$data["inventario"] = $inventario->get_inventario();
			require_once "views/inventario/inventario.php";
		}

		public function modificar($idPnventario){
			$pnventario = new Pnventario_model();
			$presentacion = new Presentacion_model();
			$categoria = new Categoria_model();
			$prioridad = new Prioridad_model();
			
			$data["idProducto"] = $idProducto;
			$data["inventario"] = $inventario->get_inventario($idProducto);
			$data["presentacion"] = $presentacion->get_presentaciones();		
			$data["categoria"] = $categoria->get_categorias();		
			$data["prioridad"] = $prioridad->get_prioridades();
			$data["titulo"] = "Modificar producto";
		}
		
		public function actualizar(){
			$stock = $_POST['stock'];

			$inventario = new Inventario_model();
			$inventario->modificar_inventario($idProducto, $stock);
			$data["titulo"] = "Producto modificado";
			$this->index();
		}
	}
?>