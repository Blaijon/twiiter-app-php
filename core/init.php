<?php
// -- THIS Is=S the first file called-----//

//grabbing the need connection variables
include'database/connection.php';
// bringing varaiables over
include 'classes/user.php';
include 'classes/tweet.php';
include 'classes/follow.php';
include 'classes/message.php';
// --- Making our pdo global when we import it to other classes
global $pdo;
//---  IMPORTANT PART :starting the session before we create classes
session_start();
//intiating classes and setting them to those variables
$getFromU = new User($pdo);
$getFromT = new Tweet($pdo);
$getFromF = new follow($pdo);
$getFromM = new Message($pdo);

// DEfining url to make constant
define("BASE_URL", "http://localhost/phptwitter/");
?>
