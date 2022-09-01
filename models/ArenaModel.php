<?php
	
	class Arena_model {
		
		private $db;
		private $arena;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->arena = array();
		}
		
		public function get_arenas(){
			$sql = "SELECT a.idArenaCats, a.totalArena, a.cantidadArena, a.fechaCompra, a.fechaTerminacion FROM arenacats a ORDER BY a.fechaCompra ASC";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc()){
				$this->arena[] = $row;
			}
			return $this->arena;
		}
		
		public function insertar_arena($totalArena, $cantidadArena, $fechaCompra, $fechaTerminacion){
			
			$sql = "INSERT INTO arenacats (totalArena, cantidadArena, fechaCompra, fechaTerminacion) VALUES ('$totalArena', '$cantidadArena', '$fechaCompra', '$fechaTerminacion')";
			$resultado = $this->db->query($sql);
			
		}
		
		public function modificar_arena($idArenaCats, $totalArena, $cantidadArena, $fechaCompra, $fechaTerminacion){
			
			$resultado = $this->db->query("UPDATE arenacats SET totalArena = '$totalArena', cantidadArena = '$cantidadArena', fechaCompra ='$fechaCompra', fechaTerminacion='$fechaTerminacion' WHERE idArenaCats = '$idArenaCats'");
		}
		
		public function get_arena($idArenaCats){
			$sql = "SELECT * FROM arenacats WHERE idArenaCats='$idArenaCats' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function eliminar_arena($idArenaCats){
			$resultado = $this->db->query("DELETE FROM arenacats WHERE idArenaCats = '$idArenaCats'");
		}
	}
?>