<?php
	declare(strict_types=1);

	session_start();

	//requisita arquivo(autoloader)
	require_once __DIR__."/../autoload.php";

	//referencia namespace(dir) class Core
	use App\Core\Core;

	$core = new Core();
?>