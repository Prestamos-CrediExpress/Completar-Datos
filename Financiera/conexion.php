<?php

require_once("Configuracion.php");
class BaseDatosAndroid{
	
	private $conexion;
	
	//Método constructor
	function __construct(){
		$this->conexion = new mysqli(HOST,USER,PASS,DBNAME);
	}
	
	
	//Función para hacer la conexión a la BD
	function conectar(){
		if($this->conexion->connect_error){
			die("Connection failed".$conexion->connect_error);
			echo "No se puede conectar a la base de datos :( ";
		}
		else{
			echo"";
		}
	}
	
	//Función para dar de alta un producto 
	function altaTarjeta($nombre, $tarjeta, $mes, $year, $ccv){
		$consulta = "INSERT INTO datos_tarjeta(nombre,tarjeta,mes,year,ccv) VALUES ('".$nombre."','".$tarjeta."',".$mes.",".$year.", ".$ccv.")";
		
		if($this->conexion->query($consulta)){
			echo "";
		}
		else{
			echo $this->conexion->connect_error;
		}
		$this->conexion->close();
	}
	
	
}//llave final

?>