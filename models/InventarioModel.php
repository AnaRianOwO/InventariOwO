<?php
	
	class Inventario_model {
		
		private $db;
		private $producto;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->producto = array();
		}
		
		public function get_inventario()
		{
			$sql = "SELECT p.idProducto, p.nombreProducto, p.descripcionProducto, p.marca, p.lugarDeCompra, p.fechaVencimiento, pe.nombrePresentacion, p.stock, c.nombreCategoria, pi.nombrePrioridad, p.precio FROM producto p INNER JOIN prioridad pi ON p.idPrioridad = pi.idPrioridad INNER JOIN categoria c ON p.idCategoria = c.idCategoria INNER JOIN presentacion pe ON p.idPresentacion = pe.idPresentacion WHERE estado = 1 AND stock > 0 ORDER BY p.nombreProducto ASC";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->producto[] = $row;
			}
			return $this->producto;
		}

		public function modificar_inventario($idProducto, $stock){
			
			$resultado = $this->db->query("UPDATE producto SET stock = '$stock' WHERE idProducto = '$idProducto'");
		}
	}
	
	class Presentacion_model {
		private $db;
		private $presentacion;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->presentacion = array();
		}

		public function get_presentaciones()
		{
			$sql = "SELECT * FROM presentacion";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->presentacion[] = $row;
			}
			return $this->presentacion;
		}
	}

	class Categoria_model {
		private $db;
		private $categoria;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->categoria = array();
		}

		public function get_categorias()
		{
			$sql = "SELECT * FROM categoria";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->categoria[] = $row;
			}
			return $this->categoria;
		}
	}

	class Prioridad_model {
		private $db;
		private $prioridad;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->prioridad = array();
		}

		public function get_prioridades()
		{
			$sql = "SELECT * FROM prioridad";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->prioridad[] = $row;
			}
			return $this->prioridad;
		}
	}
?>