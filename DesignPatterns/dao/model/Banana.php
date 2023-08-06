<?php


 class Banana {
   private $validade;
   private $cor;


   public function getValidade() {
    return $this->validade;
   }

   public function setValidade($validade) {
    return $this->validade = $validade;
   }

   public function getCor() {
    return $this->cor;
   }

   public function setCor($cor) {
    return $this->cor = $cor;
   }
 }


 interface BananaDAOInterface {
    public function create(Banana $banana);
    public function findAll();
 } 