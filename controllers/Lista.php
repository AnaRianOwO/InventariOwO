<?php 
	class ListaController {

		public function __construct(){
			require_once "models/ListaModel.php";
		}

		public function index(){
			$lista = new Lista_model();
			$data["titulo"] = "Lista de compras";
			$data["lista"] = $lista->get_listas();
			require_once "views/lista/lista.php";
			bienvenida();
		}

		public function nuevo(){		
			$data["titulo"] = "Agregar lista de compras";
			require_once "views/lista/agregarLista.php";
		}

		public function guarda(){
			
			/*$nombreProducto = $_POST['nombreProducto'];
			$descripcionProducto = $_POST['descripcionProducto'];
			$marca = $_POST['marca'];
			$lugarDeCompra = $_POST['lugarDeCompra'];
			$fechaVencimiento = $_POST['fechaVencimiento'];
			$idPresentacion = $_POST['idPresentacion'];
			$stock = $_POST['stock'];
			$idCategoria = $_POST['idCategoria'];
			$idPrioridad = $_POST['idPrioridad'];
			$precio = $_POST['precio'];*/
			
			$lista = new Lista_model();
			$lista->insertar_lista(/*$nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio*/);
			$data["titulo"] = "Lista guardada";
			$this->index();
		}

		public function modificar($idLista){
			$lista = new Lista_model();

			$data["idLista"] = $idLista;
			$data["lista"] = $lista->get_lista($idLista);
			$data["titulo"] = "Modificar lista";
			require_once "views/lista/modificarLista.php";
		}

		public function activacion(){
			
			$lista = new Lista_model();
			
			$data["lista"] = $lista->get_listas_inactivas();
			$data["titulo"] = "Listas desactivados";
			require_once "views/lista/activacionLista.php";
		}
		
		public function actualizar(){

			/*$idProducto = $_POST['idProducto'];
			$nombreProducto = $_POST['nombreProducto'];
			$descripcionProducto = $_POST['descripcionProducto'];
			$marca = $_POST['marca'];
			$lugarDeCompra = $_POST['lugarDeCompra'];
			$fechaVencimiento = $_POST['fechaVencimiento'];
			$idPresentacion = $_POST['idPresentacion'];
			$stock = $_POST['stock'];
			$idCategoria = $_POST['idCategoria'];
			$idPrioridad = $_POST['idPrioridad'];
			$precio = $_POST['precio'];*/

			$lista = new Lista_model();
			$lista->modificar_lista(/*$idProducto, $nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio*/);
			$data["titulo"] = "Lista modificada";
			$this->index();
		}
		
		public function desactivar($idLista){
			
			$lista = new Lista_model();
			$lista->desactivar_lista($idLista);
			$data["titulo"] = "Lista desactivada";
			$this->index();
		}

		public function activar($idLista){
			
			$lista = new Lista_model();
			$lista->activar_lista($idLista);
			$data["titulo"] = "Lista activada";
			$this->index();
		}

		public function eliminar($idLista){
			
			$lista = new Lista_model();
			$lista->eliminar_lista($idLista);
			$data["titulo"] = "Lista eliminada";
			$this->index();
		}
	}
?>