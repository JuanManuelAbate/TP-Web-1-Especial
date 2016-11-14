<?php

  class DbConnector {

    private $host;
    private $dbName;
    private $user;
    private $password;

    function __construct() {

      $credentials = parse_ini_file("credentials.ini");
      $this->host = $credentials["host"];
      $this->dbName = $credentials["dbName"];
      $this->user = $credentials["user"];
      $this->password = $credentials["password"];
    }

    function dbExists() {

      try {
        new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8',$this->user,$this->password);
      } catch (Exception $e) {
        return false;
      }
      return true;
    }

    function createDatabase() {

      $dbConnection = new PDO('mysql:host='.$this->host.';charset=utf8',$this->user,$this->password);
      $query = $dbConnection->prepare("CREATE DATABASE ".$this->dbName);
      $query->execute();
      $dbConnection = $this->getDbConnection();
      $sqlFile = fopen("dataBase/tpespecialdb.sql", "r");
      while(!feof($sqlFile)) {
        $query = $dbConnection->prepare(fgets($sqlFile));
        $query->execute();
      }
      fclose($sqlFile);
    }

    function getDbConnection() {

      return new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8',$this->user,$this->password);
    }

  }

?>
