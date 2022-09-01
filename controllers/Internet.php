<?php 
	class InternetController {

		public function __construct(){
			require_once "models/InternetModel.php";
		}

		public function index(){
			$internet = new Internet_model();
			$data["titulo"] = "Internet";
			$data["internet"] = $internet->get_recibos();
			require_once "views/internet/internet.php";
		}

		public function nuevo(){		
			$data["titulo"] = "Agregar recibo del internet";
			require_once "views/internet/agregarInternet.php";
		}

		public function guarda(){
			
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];
			
			$internet = new Internet_model();
			$internet->insertar_recibo($valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del internet guardado";
			$this->index();
		}

		public function modificar($idRecibo){
			$internet = new Internet_model();
			
			$data["idRecibo"] = $idRecibo;
			$data["internet"] = $internet->get_recibo($idRecibo);
			$data["titulo"] = "Modificar recibo del internet";
			require_once "views/internet/modificarInternet.php";
		}

		public function activacion(){
			
			$internet = new Internet_model();
			
			$data["internet"] = $internet->get_recibos_pagados();
			$data["titulo"] = "Recibos del internet pagados";
			require_once "views/internet/activacionInternet.php";
		}
		
		public function actualizar(){

			$idRecibo = $_POST['idRecibo'];
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];

			$internet = new Internet_model();
			$internet->modificar_recibo($idRecibo, $valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo del internet modificado";
			$this->index();
		}
		
		public function desactivar($idRecibo){
			
			$internet = new Internet_model();
			$internet->pagar_recibo($idRecibo);
			$data["titulo"] = "Recibo pagado";
			$this->index();
		}

		public function activar($idRecibo){
			
			$internet = new Internet_model();
			$internet->activar_recibo($idRecibo);
			$data["titulo"] = "Recibo activado";
			$this->index();
		}

		public function eliminar($idRecibo){
			
			$internet = new Internet_model();
			$internet->eliminar_recibo($idRecibo);
			$data["titulo"] = "Recibo del internet eliminado";
			$this->index();
		}
	}
?>