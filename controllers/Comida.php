<?php 
	class ComidaController {

		public function __construct(){
			require_once "models/ComidaModel.php";
		}

		public function index(){
			$comida = new Comida_model();
			$data["titulo"] = "Comida gatos";
			$data["comida"] = $comida->get_comidas();
			require_once "views/comida/comida.php";
		}

		public function nuevo(){
			$data["titulo"] = "Agregar comida";
			require_once "views/comida/agregarComida.php";
		}

		public function guarda(){
			
			$valorComida = $_POST['valorComida'];
			$tipoComida = $_POST['tipoComida'];
			$cantidadComida = $_POST['cantidadComida'];
			$fechaCompra = $_POST['fechaCompra'];
			$fechaTerminacion = $_POST['fechaTerminacion'];
			
			$comida = new Comida_model();
			$comida->insertar_comida($valorComida, $tipoComida, $cantidadComida, $fechaCompra, $fechaTerminacion);
			$data["titulo"] = "Comida guardado";
			$this->index();
		}

		public function modificar($idComidaCats){
			$comida = new Comida_model();
			
			$data["idComidaCats"] = $idComidaCats;
			$data["comida"] = $comida->get_comida($idComidaCats);
			$data["titulo"] = "Modificar comida";
			require_once "views/comida/modificarComida.php";
		}
		
		public function actualizar(){

			$idComidaCats = $_POST['idComidaCats'];
			$valorComida = $_POST['valorComida'];
			$tipoComida = $_POST['tipoComida'];
			$cantidadComida = $_POST['cantidadComida'];
			$fechaCompra = $_POST['fechaCompra'];
			$fechaTerminacion = $_POST['fechaTerminacion'];

			$comida = new Comida_model();
			$comida->modificar_comida($idComidaCats, $valorComida, $tipoComida, $cantidadComida, $fechaCompra, $fechaTerminacion);
			$data["titulo"] = "Comida modificada";
			$this->index();
		}

		public function eliminar($idComidaCats){
			
			$comida = new Comida_model();
			$comida->eliminar_comida($idComidaCats);
			$data["titulo"] = "Comida eliminada";
			$this->index();
		}
	}
?>