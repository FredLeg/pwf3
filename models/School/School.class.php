<?php

class School extends Model {

	protected $id;
	protected $name;
	protected $address;
	protected $phone;
	protected $date_creation;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}
	public function getAddress() {
		return $this->address;
	}
	public function getPhone() {
		return $this->phone;
	}
	public function getDateCreation() {
		return $this->date_creation;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function setAddress($address) {
		$this->address = $address;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function setDateCreation($date_creation) {
		$this->date_creation = $date_creation;
	}
}
