<?php

class RoomController {

	private $pseudo;

	public function room() {
		$room = $this;
		require BASEPATH . '/Views/room.php';
	}

	public function __construct() {
		if ($_POST["pseudo"] === "") {
			$this->pseudo = "Anonyme";
		}
		$this->pseudo = $_POST["pseudo"];
	}

	public function getPseudo() {
		return $this->pseudo;
	}

}