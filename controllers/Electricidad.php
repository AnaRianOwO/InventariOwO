<?php 
	class ElectricidadController {

		public function __construct(){
			require_once "models/ElectricidadModel.php";
		}

		public function index(){
			$electricidad = new Electricidad_model();
			$data["titulo"] = "Electricidad";
			$data["electricidad"] = $electricidad->get_recibos();
			require_once "views/electricidad/electricidad.php";
		}

		public function nuevo(){		
			$data["titulo"] = "Agregar recibo de la electricidad";
			require_once "views/electricidad/agregarElectricidad.php";
		}

		public function guarda(){
			
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];
			
			$electricidad = new Electricidad_model();
			$electricidad->insertar_recibo($valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo de la electricidad guardado";
			$this->index();
		}

		public function modificar($idRecibo){
			$electricidad = new Electricidad_model();
			
			$data["idRecibo"] = $idRecibo;
			$data["electricidad"] = $electricidad->get_recibo($idRecibo);
			$data["titulo"] = "Modificar recibo de la electricidad";
			require_once "views/electricidad/modificarElectricidad.php";
		}

		public function activacion(){
			
			$electricidad = new Electricidad_model();
			
			$data["electricidad"] = $electricidad->get_recibos_pagados();
			$data["titulo"] = "Recibos de la electricidad pagados";
			require_once "views/electricidad/activacionElectricidad.php";
		}
		
		public function actualizar(){

			$idRecibo = $_POST['idRecibo'];
			$valorRecibo = $_POST['valorRecibo'];
			$consumo = $_POST['consumo'];
			$fechaPago = $_POST['fechaPago'];

			$electricidad = new Electricidad_model();
			$electricidad->modificar_recibo($idRecibo, $valorRecibo, $consumo, $fechaPago);
			$data["titulo"] = "Recibo de la electricidad modificado";
			$this->index();
		}
		
		public function desactivar($idRecibo){
			
			$electricidad = new Electricidad_model();
			$electricidad->pagar_recibo($idRecibo);
			$data["titulo"] = "Recibo pagado";
			$this->index();
		}

		public function activar($idRecibo){
			
			$electricidad = new Electricidad_model();
			$electricidad->activar_recibo($idRecibo);
			$data["titulo"] = "Recibo activado";
			$this->index();
		}

		public function eliminar($idRecibo){
			
			$electricidad = new Electricidad_model();
			$electricidad->eliminar_recibo($idRecibo);
			$data["titulo"] = "Recibo de la electricidad eliminado";
			$this->index();
		}
	}
?>