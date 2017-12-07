<?php 
	
	include_once 'DB.php';
	
	class Producto{

		public $id;
		public $nombre;
		public $descripcion;
		public $precio;
		public $tamanio;
		public $cantidad;
		public $img;

		public function getProductos(){
			$productos = array();

			$query="SELECT * FROM producto";
			$res=mysqli_query($conn,$query);
			
			while ( $filas=mysqli_fetch_array($res) ) {
				$p = new Producto();

				$p->id=$filas[0];
				$p->nombre=$filas[1];
				$p->descripcion=$filas[2];
				$p->precio=$filas[3];
				$p->tamanio=$filas[4];
				$p->cantidad=$filas[5];
				$p->img=$filas[6];
				array_push($productos, $p);
			}
		}

	}

	

 ?>