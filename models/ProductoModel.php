<?php
	
	class Producto_model {
		
		private $db;
		private $producto;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->producto = array();
		}
		
		public function get_productos()
		{
			$sql = "SELECT p.idProducto, p.nombreProducto, p.descripcionProducto, p.marca, p.lugarDeCompra, p.fechaVencimiento, pe.nombrePresentacion, p.stock, c.nombreCategoria, pi.nombrePrioridad, p.precio FROM producto p INNER JOIN prioridad pi ON p.idPrioridad = pi.idPrioridad INNER JOIN categoria c ON p.idCategoria = c.idCategoria INNER JOIN presentacion pe ON p.idPresentacion = pe.idPresentacion WHERE estado = 1 ORDER BY p.nombreProducto ASC";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->producto[] = $row;
			}
			return $this->producto;
		}

		public function get_productos_inactivos()
		{
			$sql = "SELECT p.idProducto, p.nombreProducto, p.descripcionProducto, p.marca, p.lugarDeCompra, p.fechaVencimiento, pe.nombrePresentacion, p.stock, c.nombreCategoria, pi.nombrePrioridad, p.precio FROM producto p INNER JOIN prioridad pi ON p.idPrioridad = pi.idPrioridad INNER JOIN categoria c ON p.idCategoria = c.idCategoria INNER JOIN presentacion pe ON p.idPresentacion = pe.idPresentacion WHERE estado = 0 ORDER BY p.nombreProducto ASC";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->producto[] = $row;
			}
			return $this->producto;
		}
		
		public function insertar_producto($nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio){
			
			$sql = "INSERT INTO producto (nombreProducto, descripcionProducto, marca, lugarDeCompra, fechaVencimiento, idPresentacion, stock, idCategoria, idPrioridad, precio, estado) VALUES ('$nombreProducto', '$descripcionProducto', '$marca', '$lugarDeCompra', '$fechaVencimiento', '$idPresentacion', '$stock', '$idCategoria', '$idPrioridad', '$precio', 1)";
			$resultado = $this->db->query($sql);
			
		}
		
		public function modificar_producto($idProducto, $nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio){
			
			$resultado = $this->db->query("UPDATE producto SET nombreProducto = '$nombreProducto', descripcionProducto = '$descripcionProducto', marca ='$marca', lugarDeCompra='$lugarDeCompra', fechaVencimiento = '$fechaVencimiento', idPresentacion = '$idPresentacion', stock = '$stock', idCategoria = '$idCategoria', idPrioridad = '$idPrioridad', precio = '$precio' WHERE idProducto = '$idProducto'");
		}
		
		public function desactivar_producto($idProducto){
			
			$resultado = $this->db->query("UPDATE producto SET estado = 0 WHERE idProducto = '$idProducto'");
			
		}

		public function activar_producto($idProducto){
			
			$resultado = $this->db->query("UPDATE producto SET estado = 1 WHERE idProducto = '$idProducto'");
			
		}
		
		public function get_producto($idProducto){
			$sql = "SELECT * FROM producto WHERE idProducto='$idProducto' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

		public function eliminar_producto($idProducto){
			$resultado = $this->db->query("DELETE FROM producto WHERE idProducto = '$idProducto'");
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