<?php
  /*
  * class Model(auxiliar) sendo responsavel por disponibilizar conexão única
  * perante banco de dados em seus models de tratamentos a regras de negocios
  * e acesso aos dados perante requisições
  */
  namespace App\Core;

  use App\Config\ConnectDb;

  class Model
  {
    protected object $pdo;

    public function __construct()
    {
      $this->pdo = ConnectDb::getInstancePdo(); //instancia unica(Padrão Singleton)
    }
  }
?>