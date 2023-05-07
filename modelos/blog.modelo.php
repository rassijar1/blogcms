<?php

require_once "conexion.php";

class ModeloBlog{


/*--=====================================
	Mostrar contenido de blog
	======================================*/


	static public function mdlMostrarBlog($tabla){

		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();
		$stmt=null;	


	}


}