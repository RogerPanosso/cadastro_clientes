<?php
	/*
	* Define class Model(Cidades)
	*/
	namespace App\Models;

	use App\Core\Model;

	class Cidades extends Model {

		public function getCidadesUsuario(int $id_estado) {
			$array = array();
			$query = "SELECT * FROM cidades WHERE id_estado = :id_estado ORDER BY nome ASC";
			$query = $this->pdo->prepare($query);
			$query->bindValue(":id_estado", $id_estado);
			$query->execute();
			if($query->rowCount() > 0):
				$array = $query->fetchAll(\PDO::FETCH_ASSOC);
			endif;
			return $array;
		}
	}
?>