<?php

require BASEPATH . '/Models/UseBdd.php';

class RoomController {

	private $pseudo;
	private $bdd;

	public function room() {
		$room = $this;
		require BASEPATH . '/Views/room.php';
	}

	public function __construct() {
		$this->bdd = new UseBdd();
		if ($_POST["pseudo"] === "") {
			$this->pseudo = "Anonyme";
		} else {
		$this->pseudo = $_POST["pseudo"];
		}
	}

	public function getPseudo() {
		return $this->pseudo;
	}

	public function getAllEntries() {
		return $this->bdd->getAllEntries();
	}

}