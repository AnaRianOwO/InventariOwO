<?php 
	class AguaController {

		public function __construct(){
			require_once "models/AguaModel.php";
		}

		public function index(){
			$agua = new Agua_model();
			$data["titulo"] = "Agua";
			$data["agua"] = $agua->get_recibos();
			require_once "views/agua/agua.php";
		}

		public function nuevo(){		
			$data["titulo"] = "Agregar recibo del agua";
			require_once "views/agua/agregarAgua.php";
		}

		public function guarda(){
			
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];
			
			$agua = new Agua_model();
			$agua->insertar_recibo($valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del agua guardado";
			$this->index();
		}

		public function modificar($idRecibo){
			$agua = new Agua_model();
			
			$data["idRecibo"] = $idRecibo;
			$data["agua"] = $agua->get_recibo($idRecibo);
			$data["titulo"] = "Modificar recibo del agua";
			require_once "views/agua/modificarAgua.php";
		}

		public function activacion(){
			
			$agua = new Agua_model();
			
			$data["agua"] = $agua->get_recibos_pagados();
			$data["titulo"] = "Recibos del agua pagados";
			require_once "views/agua/activacionAgua.php";
		}
		
		public function actualizar(){

			$idRecibo = $_POST['idRecibo'];
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];

			$agua = new Agua_model();
			$agua->modificar_recibo($idRecibo, $valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del agua modificado";
			$this->index();
		}
		
		public function desactivar($idRecibo){
			
			$agua = new Agua_model();
			$agua->pagar_recibo($idRecibo);
			$data["titulo"] = "Recibo pagado";
			$this->index();
		}

		public function activar($idRecibo){
			
			$agua = new Agua_model();
			$agua->activar_recibo($idRecibo);
			$data["titulo"] = "Recibo activado";
			$this->index();
		}

		public function eliminar($idRecibo){
			
			$agua = new Agua_model();
			$agua->eliminar_recibo($idRecibo);
			$data["titulo"] = "Recibo del agua eliminado";
			$this->index();
		}
	}
?>