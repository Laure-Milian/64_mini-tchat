
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
<link rel="stylesheet" href="style.css">

<?php
define('BASEPATH', __DIR__);

require BASEPATH . '/vendor/autoload.php';
require BASEPATH . '/Controllers/AuthentificationController.php';
require BASEPATH . '/Controllers/RoomController.php';

ORM::configure('mysql:host=localhost;dbname=CaraMessenger');
ORM::configure('username', 'root');
ORM::configure('password', 'simplonco');

ORM::configure('return_result_sets', true);

// ORM::raw_execute("ALTER TABLE messages ADD id INT PRIMARY KEY AUTO_INCREMENT");


if (!isset($_GET["page"])) {
	(new AuthentificationController)->home();
} else if ($_GET["page"] === "tchatroom"){
	(new RoomController)->room();
}