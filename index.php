<?php
define('BASEPATH', __DIR__);

require BASEPATH . '/vendor/autoload.php';
require BASEPATH . '/Controllers/AuthentificationController.php';
require BASEPATH . '/Controllers/RoomController.php';

ORM::configure('mysql:host=localhost;dbname=CaraMessenger');
ORM::configure('username', 'root');
ORM::configure('password', 'simplonco');

ORM::configure('return_result_sets', true);

ORM::for_table('messages')->find_result_set();
$person = ORM::for_table('messages')->where('pseudo', 'Lou')->find_one();
echo $person->pseudo;


if (!isset($_GET["page"])) {
	(new AuthentificationController)->home();
} else if ($_GET["page"] === "tchatroom"){
	(new RoomController)->room();
}