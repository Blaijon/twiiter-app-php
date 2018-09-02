<?php
// -- DATABASE variables need for connection
  $dsn = 'mysql:host=localhost; dbname=tweety';
  $user = 'root';
  $pass = '';

	  try{
	  	//using PDO class and storing variables in pdo variable
	    $pdo = new PDO($dsn, $user, $pass);
	  } catch (PDOException $e){
	    echo 'Connection error! ' . $e->getMessage();
	  }
  ?>
