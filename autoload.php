<?php
	/*
	* Definição de autoloader realizando carregamento automatico de classes apartir de seus
	* supostos diretorios(namespaces) diante aplicação requerindo e registrando instancias
	* ocorridas
	*/
	spl_autoload_register(function($classe){
		$dir_base = __DIR__."/".str_replace("\\", "/", $classe.".php");
		if(file_exists($dir_base)) {
			require $dir_base;
			return true;
		}else {
			return false;
		}
	});
?>