<?php
  /*
  * Arquivo de Config(configurações) estabelecendo dados de configurações em array para conexão
  * a banco de dados de acordo com ambiente de desenvolvimento estabelecido e utilizado
  */
  require_once "Environment.php";

  $config = array();

  if(ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/projeto_cadastro_clientes/");
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_cadastro_clientes";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }else {
    /* valores relacionados ao servidor externo */
    define("BASE_URL", "http://localhost/projeto_cadastro_clientes/");
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_cadastro_clientes";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }
?>