<?php

Class ControladorBlog{

/*--=====================================
	Mostrar contenido de blog
	======================================*/


static public function ctrMostrarblog(){


$tabla="blog";
$respuesta=ModeloBlog::mdlMostrarBlog($tabla);

return $respuesta;


}


}





