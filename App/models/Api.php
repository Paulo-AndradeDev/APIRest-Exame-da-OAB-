<?php

use App\Core\Model;

class Api extends Model 
{

	
	public function findExame($search)
	{
		$sql = "SELECT * FROM oab WHERE exame LIKE ? COLLATE utf8mb4_general_ci";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,"%{$search}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):
			http_response_code(200);
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			http_response_code(404);
			return [];
		endif;
		
	}



	public function findEstado($search)
	{
		$sql = "SELECT * FROM oab WHERE estado LIKE ? COLLATE utf8mb4_general_ci";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,"%{$search}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):
			http_response_code(200);
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			http_response_code(404);
			return [];
		endif;
	}


	public function findFaculdade($search)
	{
		$sql = "SELECT * FROM oab WHERE faculdade LIKE ? COLLATE utf8mb4_general_ci";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,"%{$search}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):
			http_response_code(200);
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			http_response_code(404);
			return [];
		endif;
	}


	public function findCidade($search)
	{
		$sql = "SELECT * FROM oab WHERE cidade LIKE ? COLLATE utf8mb4_general_ci";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,"%{$search}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):
			http_response_code(200);
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			http_response_code(404);
			return []; 
		endif;
	}

}

?>