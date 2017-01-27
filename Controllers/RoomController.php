<?php

class RoomController {

	private $pseudo;

	public function room() {
		$room = $this;
		require BASEPATH . '/Views/room.php';
	}

	public function __construct() {
		$this->pseudo = $_POST["pseudo"];
		if ($_POST["pseudo"] === "") {
			$this->pseudo = "Anonyme";
		}
	}

	public function getPseudo() {
		return $this->pseudo;
	}

}