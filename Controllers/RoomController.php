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
		if (isset($_POST["message"])) {
			$this->addEntry();
		}
	}

	public function getPseudo() {
		return $this->pseudo;
	}

	public function getAllEntries() {
		return $this->bdd->getAllEntries();
	}

	public function addEntry() {
		$pseudo = $this->pseudo;
		$date = "2017-01-22";
		$message = $_POST["message"];
		$this->bdd->addEntry($pseudo, $date, $message);
	}

}