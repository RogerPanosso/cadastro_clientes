<?php
	/*
	* Definição da class homeController contendo métodos(actions) sendo responsavel
	* por obter controle á página view(home)
	*/
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Models\Estados;
	use App\Models\Cidades;

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

		public function getCidadesUsuario() {
			$cidades = new Cidades();
			$id_estado = filter_input(INPUT_POST, "id_estado");
			if($id_estado == true):
				$array = $cidades->getCidadesUsuario($id_estado);
			endif;
			echo json_encode($array);
			exit;
		}
	}
?>