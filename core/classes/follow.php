<?php
//---- Everything extends user class ----//
class Follow extends User{
 
  function __construct($pdo){
    $this->pdo = $pdo;
  }
} ?>
