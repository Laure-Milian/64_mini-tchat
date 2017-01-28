<?php

class UseBdd {
	
	public function getAllEntries() {
		$entries = ORM::for_table('messages')->find_result_set();
		return $entries;
	}

	public function addEntry($pseudoNew, $dateNew, $messageNew) {
		$number_of_entries = ORM::for_table('messages')->count();

		$newEntry = ORM::for_table('messages')->create();
		$newEntry->id = $number_of_entries + 1;
		$newEntry->pseudo = $pseudoNew;
		$newEntry->date = $dateNew;
		$newEntry->message = $messageNew;
		$newEntry->save();
	}

}