<?php

class UseBdd {
	
	public function getAllEntries() {
		$entries = ORM::for_table('messages')->find_result_set();
		return $entries;
	}

	public function addMessage() {
		$number_of_entries = ORM::for_table('messages')->count();

		$newEntry = ORM::for_table('messages')->create();
		$newEntry->id = $number_of_entries;
		$newEntry->pseudo = "Franck";
		$newEntry->date = "2017-01-22";
		$newEntry->message = "Hello there";
		$newEntry->save();
	}

}