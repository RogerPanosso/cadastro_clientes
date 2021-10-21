<?php
	/*
	* Definição da class Model(Clientes)
	*/
	namespace App\Models;

	use App\Core\Model;

	class Clientes extends Model {

		/* auxiliares */
		private function verificaCadastro($email, $telefone) {
			$query = "SELECT * FROM clientes WHERE email = :email and telefone = :telefone";
			$query = $this->pdo->prepare($query);
			$query->bindValue(":email", $email);
			$query->bindValue(":telefone", $telefone);
			$query->execute();
			if($query->rowCount() === 0):
				return true;
			else:
				return false;
			endif;
		}

		private function estadoCliente($id_estado) {
			$query = "SELECT estado FROM estados WHERE id = :id";
			$query = $this->pdo->prepare($query);
			$query->bindValue(":id", $id_estado);
			$query->execute();
			if($query->rowCount() > 0):
				$estado_cliente = $query->fetch(\PDO::FETCH_ASSOC);
				return $estado_cliente["estado"];
			endif;
		}

		public function salvarCadastro($nome, $sobrenome, $email, $telefone, $id_estado, $cidade) {
			if($this->verificaCadastro($email, $telefone) == true):
				$query = "INSERT INTO clientes (nome,sobrenome,email,telefone,estado,cidade) VALUES (:nome,:sobrenome,:email,:telefone,:estado,:cidade)";
				$query = $this->pdo->prepare($query);
				$query->bindValue(":nome", $nome);
				$query->bindValue(":sobrenome", $sobrenome);
				$query->bindValue(":email", $email);
				$query->bindValue(":telefone", $telefone);
				$query->bindValue(":estado", $this->estadoCliente($id_estado));
				$query->bindValue(":cidade", $cidade);
				$query->execute();
				return true;
			endif;
		}
	}
?>