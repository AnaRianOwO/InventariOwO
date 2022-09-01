<?php 
	class ProductoController {

		public function __construct(){
			require_once "models/ProductoModel.php";
		}

		public function index(){
			$producto = new Producto_model();
			$data["titulo"] = "Productos";
			$data["producto"] = $producto->get_productos();
			require_once "views/producto/producto.php";
		}

		public function nuevo(){
			$presentacion = new Presentacion_model();
			$categoria = new Categoria_model();
			$prioridad = new Prioridad_model();
		
			$data["presentacion"] = $presentacion->get_presentaciones();		
			$data["categoria"] = $categoria->get_categorias();		
			$data["prioridad"] = $prioridad->get_prioridades();
			$data["titulo"] = "Agregar producto";
			require_once "views/producto/agregarProducto.php";
		}

		public function guarda(){
			
			$nombreProducto = $_POST['nombreProducto'];
			$descripcionProducto = $_POST['descripcionProducto'];
			$marca = $_POST['marca'];
			$lugarDeCompra = $_POST['lugarDeCompra'];
			$fechaVencimiento = $_POST['fechaVencimiento'];
			$idPresentacion = $_POST['idPresentacion'];
			$stock = $_POST['stock'];
			$idCategoria = $_POST['idCategoria'];
			$idPrioridad = $_POST['idPrioridad'];
			$precio = $_POST['precio'];
			
			$producto = new Producto_model();
			$producto->insertar_producto($nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio);
			$data["titulo"] = "Producto guardado";
			$this->index();
		}

		public function modificar($idProducto){
			$producto = new Producto_model();
			$presentacion = new Presentacion_model();
			$categoria = new Categoria_model();
			$prioridad = new Prioridad_model();
			
			$data["idProducto"] = $idProducto;
			$data["producto"] = $producto->get_producto($idProducto);
			$data["presentacion"] = $presentacion->get_presentaciones();		
			$data["categoria"] = $categoria->get_categorias();		
			$data["prioridad"] = $prioridad->get_prioridades();
			$data["titulo"] = "Modificar producto";
			require_once "views/producto/modificarProducto.php";
		}

		public function activacion(){
			
			$producto = new Producto_model();
			
			$data["producto"] = $producto->get_productos_inactivos();
			$data["titulo"] = "Productos desactivados";
			require_once "views/producto/activacionProducto.php";
		}
		
		public function actualizar(){

			$idProducto = $_POST['idProducto'];
			$nombreProducto = $_POST['nombreProducto'];
			$descripcionProducto = $_POST['descripcionProducto'];
			$marca = $_POST['marca'];
			$lugarDeCompra = $_POST['lugarDeCompra'];
			$fechaVencimiento = $_POST['fechaVencimiento'];
			$idPresentacion = $_POST['idPresentacion'];
			$stock = $_POST['stock'];
			$idCategoria = $_POST['idCategoria'];
			$idPrioridad = $_POST['idPrioridad'];
			$precio = $_POST['precio'];

			$producto = new Producto_model();
			$producto->modificar_producto($idProducto, $nombreProducto, $descripcionProducto, $marca, $lugarDeCompra, $fechaVencimiento, $idPresentacion, $stock, $idCategoria, $idPrioridad, $precio);
			$data["titulo"] = "Producto modificado";
			$this->index();
		}
		
		public function desactivar($idProducto){
			
			$producto = new Producto_model();
			$producto->desactivar_producto($idProducto);
			$data["titulo"] = "Producto desactivado";
			$this->index();
		}

		public function activar($idProducto){
			
			$producto = new Producto_model();
			$producto->activar_producto($idProducto);
			$data["titulo"] = "Producto activado";
			$this->index();
		}

		public function eliminar($idProducto){
			
			$producto = new Producto_model();
			$producto->eliminar_producto($idProducto);
			$data["titulo"] = "Producto eliminado";
			$this->index();
		}

		public function reporte(){
			$producto = new Producto_model();
			$data["titulo"] = "Productos";
			$data["producto"] = $producto->get_productos();
			$prod = array(utf8_decode('Nombre'), utf8_decode('Descripción'), utf8_decode('Marca'), utf8_decode('Lugar de compra'), utf8_decode('Vencimiento'), utf8_decode('Presentación'), utf8_decode('Stock'), utf8_decode('Categoria'), utf8_decode('Prioridad'), utf8_decode('Precio'));
			require_once "views/producto/reporteProducto.php";
		}
	}
?>