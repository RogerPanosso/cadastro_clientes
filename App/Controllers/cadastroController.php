<?php
	/*
	* Definição da class cadastroController contendo métodos(actions) sendo responsavel por 
	* obter controle á requisições internas realizadas e tratar dados para cadastro
	*/
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Models\Clientes;

	class cadastroController extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function salvarCadastro() {
			$dados = array();
			$cliente = new Clientes();
			$nome = trim(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
			$sobrenome = trim(filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_STRING));
			$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			$telefone = trim(filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING));
			$id_estado = filter_input(INPUT_POST, "id_estado", FILTER_VALIDATE_INT);
			$cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
			if($nome and $sobrenome and $email and $telefone and $id_estado and $cidade):
				if($cliente->salvarCadastro($nome, $sobrenome, $email, $telefone, $id_estado, $cidade) == true):
					$dados["return"] = "Cadastro realizado com sucesso";
					$this->loadView("success", $dados);
				else:
					$dados["return"] = "Cliente já cadastrado com e-mail e telefone informados";
					$this->loadView("error", $dados);
				endif;
			endif;
		}
	}
?>