<?php
	
	class Agua_model {
		
		private $db;
		private $agua;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->agua = array();
		}
		
		public function get_recibos()
		{
			$sql = "SELECT r.idRecibo, r.valorRecibo, r.consumo, r.fechaPago FROM recibo r WHERE r.estado = 0 AND r.idServicio = 1 ORDER BY r.fechaPago ASC";
			/* SELECT r.valorRecibo, s.tipoServicio, r.consumo, r.fechaPago FROM recibo r INNER JOIN servicios s ON r.idServicio = s.idServicio WHERE r.estado = 'Pagado' AND r.idServicio = 1 ORDER BY r.fechaPago ASC; */
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->agua[] = $row;
			}
			return $this->agua;
		}

		public function get_recibos_pagados()
		{
			$sql = "SELECT r.idRecibo, r.valorRecibo, r.consumo, r.fechaPago FROM recibo r WHERE r.estado = 1 AND r.idServicio = 1 ORDER BY r.fechaPago ASC";
			/* SELECT r.valorRecibo, r.consumo, r.fechaPago FROM recibo r WHERE r.estado = 'No pago' AND s.idServicio = 1 ORDER BY r.fechaPago ASC */
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->agua[] = $row;
			}
			return $this->agua;
		}
		
		public function insertar_recibo($valorRecibo, $consumo, $fechaPago){
			
			$sql = "INSERT INTO recibo (valorRecibo, idServicio, consumo, fechaPago, estado) VALUES ('$valorRecibo', 1, '$consumo', '$fechaPago', 0)";
			$resultado = $this->db->query($sql);
			
		}
		
		public function modificar_recibo($idRecibo, $valorRecibo, $consumo, $fechaPago){
			
			$resultado = $this->db->query("UPDATE recibo SET valorRecibo = '$valorRecibo', consumo ='$consumo', fechaPago='$fechaPago' WHERE idRecibo = '$idRecibo'");
		}
		
		public function pagar_recibo($idRecibo){
			
			$resultado = $this->db->query("UPDATE recibo SET estado = 1 WHERE idRecibo = '$idRecibo'");
			
		}

		public function activar_recibo($idRecibo){
			
			$resultado = $this->db->query("UPDATE recibo SET estado = 0 WHERE idRecibo = '$idRecibo'");
			
		}
		
		public function get_recibo($idRecibo)
		{
			$sql = "SELECT * FROM recibo WHERE idRecibo='$idRecibo' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

		public function eliminar_recibo($idRecibo)
		{
			$resultado = $this->db->query("DELETE FROM recibo WHERE idRecibo = '$idRecibo'");
		}
	}
?>