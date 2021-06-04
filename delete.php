<?php 
require "conexion.php";
session_start();
	if(isset($_GET['id_estudiante'])){
		$id_estudiante= $_GET['id_estudiante'];
		$delete=$pgsql=pg_prepare('DELETE FROM estudiante WHERE id_estudiante=:id_estudiante');
		$delete=pg_execute(array(
			':id_estudiante'=>$id_estudiante
		));
		header('Location: principal.php');
	}else{
		header('Location: principal.php');
	}
 ?>