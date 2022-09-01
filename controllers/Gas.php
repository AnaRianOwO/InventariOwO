<?php 
	class GasController {

		public function __construct(){
			require_once "models/gasModel.php";
		}

		public function index(){
			$gas = new Gas_model();
			$data["titulo"] = "Gas";
			$data["gas"] = $gas->get_recibos();
			require_once "views/gas/gas.php";
		}

		public function nuevo(){		
			$data["titulo"] = "Agregar recibo del gas";
			require_once "views/gas/agregarGas.php";
		}

		public function guarda(){
			
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];
			
			$gas = new Gas_model();
			$gas->insertar_recibo($valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del gas guardado";
			$this->index();
		}

		public function modificar($idRecibo){
			$gas = new Gas_model();
			
			$data["idRecibo"] = $idRecibo;
			$data["gas"] = $gas->get_recibo($idRecibo);
			$data["titulo"] = "Modificar recibo del gas";
			require_once "views/gas/modificarGas.php";
		}

		public function activacion(){
			
			$gas = new Gas_model();
			
			$data["gas"] = $gas->get_recibos_pagados();
			$data["titulo"] = "Recibos del gas pagados";
			require_once "views/gas/activacionGas.php";
		}
		
		public function actualizar(){

			$idRecibo = $_POST['idRecibo'];
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];

			$gas = new Gas_model();
			$gas->modificar_recibo($idRecibo, $valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del gas modificado";
			$this->index();
		}
		
		public function desactivar($idRecibo){
			
			$gas = new Gas_model();
			$gas->pagar_recibo($idRecibo);
			$data["titulo"] = "Recibo pagado";
			$this->index();
		}

		public function activar($idRecibo){
			
			$gas = new Gas_model();
			$gas->activar_recibo($idRecibo);
			$data["titulo"] = "Recibo activado";
			$this->index();
		}

		public function eliminar($idRecibo){
			
			$gas = new Gas_model();
			$gas->eliminar_recibo($idRecibo);
			$data["titulo"] = "Recibo del gas eliminado";
			$this->index();
		}
	}
?>