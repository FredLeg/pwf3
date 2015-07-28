<?php

class Student extends Model {

	protected $id;
	protected $session_id;
	protected $firstname;
	protected $lastname;
	protected $sex;
	protected $photo;
	protected $date_birth;
	protected $num_pe;
	protected $from_city;
	protected $email;
	protected $phone;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getSessionId() {
		return $this->session_id;
	}
	public function getFirstname() {
		return $this->firstname;
	}
	public function getLastname() {
		return $this->lastname;
	}
	public function getSex() {
		return $this->sex;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getDateBirth() {
		return $this->date_birth;
	}
	public function getNumPE() {
		return $this->num_pe;
	}
	public function getFromCity() {
		return $this->from_city;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getPhone() {
		return $this->phone;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setSessionId($session_id) {
		$this->session_id = $session_id;
	}
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}
	public function setSex($sex) {
		$this->sex = $sex;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setDateBirth($date_birth) {
		$this->date_birth = $date_birth;
	}
	public function setNumPE($num_pe) {
		$this->num_pe = $num_pe;
	}
	public function setFromCity($from_city) {
		$this->from_city = $from_city;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
}