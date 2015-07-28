<?php

class School_Session extends Model {

	protected $id;
	protected $school_id;
	protected $date_start;
	protected $date_end;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getSchoolId() {
		return $this->school_id;
	}
	public function getDateStart() {
		return $this->date_start;
	}
	public function getDateEnd() {
		return $this->date_end;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setSchoolId($school_id) {
		$this->school_id = $school_id;
	}
	public function setDateStart($date_start) {
		$this->date_start = $date_start;
	}
	public function setDateEnd($date_end) {
		$this->date_end = $date_end;
	}
}