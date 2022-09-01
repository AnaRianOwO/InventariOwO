<?php
	
	class Comida_model {
		
		private $db;
		private $comida;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->comida = array();
		}
		
		public function get_comidas(){
			$sql = "SELECT a.idComidaCats, a.valorComida, a.tipoComida, a.cantidadComida, a.fechaCompra, a.fechaTerminacion FROM comidacats a ORDER BY a.fechaCompra ASC";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc()){
				$this->comida[] = $row;
			}
			return $this->comida;
		}
		
		public function insertar_comida($valorComida, $tipoComida, $cantidadComida, $fechaCompra, $fechaTerminacion){
			
			$sql = "INSERT INTO comidacats (valorComida, cantidadComida, tipoComida, fechaCompra, fechaTerminacion) VALUES ('$valorComida', '$cantidadComida', '$tipoComida', '$fechaCompra', '$fechaTerminacion')";
			$resultado = $this->db->query($sql);
			}
		
		public function modificar_comida($idComidaCats, $valorComida, $tipoComida, $cantidadComida, $fechaCompra, $fechaTerminacion){
			
			$resultado = $this->db->query("UPDATE comidacats SET valorComida = '$valorComida', tipoComida = '$tipoComida', cantidadComida = '$cantidadComida', fechaCompra ='$fechaCompra', fechaTerminacion='$fechaTerminacion' WHERE idComidaCats = '$idComidaCats'");
		}
		
		public function get_comida($idComidaCats){
			$sql = "SELECT * FROM comidacats WHERE idComidaCats='$idComidaCats' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function eliminar_comida($idComidaCats){
			$resultado = $this->db->query("DELETE FROM comidacats WHERE idComidaCats = '$idComidaCats'");
		}
	}
?>