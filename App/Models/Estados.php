<?php
	/*
	* Definição da class Model(Estados)
	*/
	namespace App\Models;

	use App\Core\Model;

	class Estados extends Model {

		public function getEstadosAll() {
			$array = array();
			$query = "SELECT * FROM estados ORDER BY id ASC";
			$query = $this->pdo->query($query);
			if($query->rowCount() > 0):
				$array = $query->fetchAll(\PDO::FETCH_ASSOC);
			endif;
			return $array;
		}
	}
?>