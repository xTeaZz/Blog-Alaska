<?php

  class Database {

    const HOST = '127.0.0.1';
    const DBNAME = 'alaska';
    const USERNAME = 'root';
    const PASSWORD = '';
    protected $db;

    public function __construct() {
      try{
          $this->db = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset=utf8', ''.self::USERNAME.'', ''.self::PASSWORD.'');
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      }
      catch (Exception $e)
      {
          die('Erreur : ' . $e->getMessage());
      }
    }

    public function getConnection() {
      return $this->db;
    }

  }

?>
