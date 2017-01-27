<?php

define('BASEPATH', __DIR__);
require BASEPATH . '/Controllers/AuthentificationController.php';
require BASEPATH . '/Controllers/RoomController.php';

if (!isset($_GET["page"])) {
	(new AuthentificationController)->home();
} else if ($_GET["page"] === "tchatroom"){
	(new RoomController)->room();
}