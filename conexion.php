<?php
	
	$pgsql  = pg_connect("host=localhost dbname=barrio port=5432 user=postgres password=1710");
	class Conexion{
		public static function Conectar(){
			define('servidor','localhost');
         define('nombre_bd','login_2019');
         define('usuario','root');
         define('password',''); 
			$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
			
			try{
				$conexion = new PDO("host= localhost;dbname=barrio, postgres, 1710");             
			   return $conexion; 
			}catch (Exception $e){
				die("El error de Conexión es :".$e->getMessage());
			}         
		}
		
	}
?>
