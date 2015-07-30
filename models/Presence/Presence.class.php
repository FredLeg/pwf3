<?php

class Presence extends Model {

	protected $id;
	protected $student_id;
	protected $day;
	protected $R1;
	protected $R2;
	protected $D1;
	protected $D2;
	protected $absent;
	protected $motif;
	protected $update_user_id;
	protected $update_date;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getStudentId() {
		return $this->student_id;
	}
	public function getDay() {
		return $this->day;
	}
	public function getR1() {
		return $this->R1;
	}
	public function getR2() {
		return $this->R2;
	}
	public function getD1() {
		return $this->D1;
	}
	public function getD2() {
		return $this->D2;
	}
	public function getAbsent() {
		return $this->absent;
	}
	public function getMotif() {
		return $this->motif;
	}
	public function getUpdateUserId() {
		return $this->update_user_id;
	}
	public function getUpdateDate() {
		return $this->update_date;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setStudentId($student_id) {
		$this->student_id = $student_id;
	}
	public function setDay($day) {
		$this->day = $day;
	}
	public function setR1($R1) {
		$this->R1 = $R1;
	}
	public function setR2($R2) {
		$this->R2 = $R2;
	}
	public function setD1($D1) {
		$this->D1 = $D1;
	}
	public function setD2($D2) {
		$this->D2 = $D2;
	}
	public function setAbsent($absent) {
		$this->absent = $absent;
	}
	public function setMotif($motif) {
		$this->motif = $motif;
	}
	public function setUpdateUserId($update_user_id) {
		$this->update_user_id = $update_user_id;
	}
	public function setUpdateDate($update_date) {
		$this->update_date = $update_date;
	}
}
