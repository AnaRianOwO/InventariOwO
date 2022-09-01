<?php 
	class ArenaController {

		public function __construct(){
			require_once "models/ArenaModel.php";
		}

		public function index(){
			$arena = new Arena_model();
			$data["titulo"] = "Arena gatos";
			$data["arena"] = $arena->get_arenas();
			require_once "views/arena/arena.php";
		}

		public function nuevo(){
			$data["titulo"] = "Agregar arena";
			require_once "views/arena/agregarArena.php";
		}

		public function guarda(){
			
			$totalArena = $_POST['totalArena'];
			$cantidadArena = $_POST['cantidadArena'];
			$fechaCompra = $_POST['fechaCompra'];
			$fechaTerminacion = $_POST['fechaTerminacion'];
			
			$arena = new Arena_model();
			$arena->insertar_arena($totalArena, $cantidadArena, $fechaCompra, $fechaTerminacion);
			$data["titulo"] = "Arena guardado";
			$this->index();
		}

		public function modificar($idArenaCats){
			$arena = new Arena_model();
			
			$data["idArenaCats"] = $idArenaCats;
			$data["arena"] = $arena->get_arena($idArenaCats);
			$data["titulo"] = "Modificar arena";
			require_once "views/arena/modificarArena.php";
		}
		
		public function actualizar(){

			$idArenaCats = $_POST['idArenaCats'];
			$totalArena = $_POST['totalArena'];
			$cantidadArena = $_POST['cantidadArena'];
			$fechaCompra = $_POST['fechaCompra'];
			$fechaTerminacion = $_POST['fechaTerminacion'];

			$arena = new Arena_model();
			$arena->modificar_arena($idArenaCats, $totalArena, $cantidadArena, $fechaCompra, $fechaTerminacion);
			$data["titulo"] = "Arena modificada";
			$this->index();
		}

		public function eliminar($idArenaCats){
			
			$arena = new Arena_model();
			$arena->eliminar_arena($idArenaCats);
			$data["titulo"] = "Arena eliminada";
			$this->index();
		}
	}
?>