<?php

class DataBase {
  private $link;
  private $host;
  private $username;
  private $password;
  private $database;

  public function __construct() {
    global $SETTINGS;
    $this->host     = $SETTINGS['db']['host'];
    $this->username = $SETTINGS['db']['user'];
    $this->password = $SETTINGS['db']['pass'];
    $this->database = $SETTINGS['db']['name'];
    $this->connect();
  }

  public function connect() {
    try {
      $this->link = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password);
      $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo $e->getMessage();
      die();
    }
  }

  public function getConnection() {
    return $this->link;
  }
}
