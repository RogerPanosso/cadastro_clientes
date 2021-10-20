<?php
	/*
	* Definição da class homeController contendo métodos(actions) sendo responsavel
	* por obter controle á página view(home)
	*/
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Models\Estados;

	class homeController extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$dados = array();
			$estados = new Estados();
			$dados["estados"] = $estados->getEstadosAll();
			$this->loadTemplate("home", $dados);
		}
	}
?>