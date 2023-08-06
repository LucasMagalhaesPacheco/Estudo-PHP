<?php

include_once("model/Banana.php");


class BananaDAO implements BananaDAOInterface {
    
  private $conn;

  public function __construct(PDO $conn) {
    $this->conn = $conn;
  }
  public function findAll() {

  }

  public function create(Banana $banana) {

  }
}