<?php
class User extends Model {

	private $school_id;
	private $group_id;
	private $name;
	private $titre;
	private $photo;
	private $email;
	private $phone;
	private $infos;

	public function getId() {
		return $this->id;
	}
	public function getSchoolId() {
		return $this->school_id;
	}
	public function getGroupId() {
		return $this->group_id;
	}
	public function getname() {
		return $this->name;
	}
	public function getTitre() {
		return $this->titre;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getPhone() {
		return $this->phone;
	}
	public function getInfos() {
		return $this->infos;
	}

	public function setId($id) {
		$this->id = $id;
	}
	public function setSchoolId($school_id) {
		$this->school_id = $school_id;
	}
	public function setGroupId($group_id) {
		$this->group_id = $group_id;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function setTitre($titre) {
		$this->titre = $titre;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function setInfos($infos) {
		$this->infos = $infos;
	}

}