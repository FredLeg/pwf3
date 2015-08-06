<?php

class Student extends Model {

	protected $id;
	protected $session_id;
	protected $firstname;
	protected $lastname;
	protected $gender;
	protected $photo;
	protected $date_birth;
	protected $num_pe;
	protected $from_city;
	protected $email;
	protected $phone;

	private $presence;

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
	public function getFullname() {
		return $this->firstname.' '.$this->lastname; // cannot be set
	}
	public function getLastname() {
		return $this->lastname;
	}
	public function getGender() {
		return $this->gender;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getPathPhoto() {
		if (is_null($this->photo) || empty($this->photo)) {
			return 'avatar-'.$this->getGender().'.png';
		}
    	$path_path = $this->getSessionId().'/'.$this->photo;
    	if (!file_exists(IMG_PATH.'trombino/'.$path_path)) {
    		return 'avatar-'.$this->getGender().'.png';
    	}
    	return $path_path;
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
	public function getPresence() {
		return $this->presence;
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
	public function setGender($gender) {
		$this->gender = $gender;
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
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception('Email must be valid');
		}
		$this->email = $email;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function setPresence($day = null) {
		if (is_null($day)) {
			$day = date('Y-m-d');
		}
		$this->presence = new Presence(Db::selectOne('SELECT * FROM presence WHERE student_id = :student_id AND day = :day', array('student_id' => $this->id, 'day' => $day)));
	}

	public function getForm($type, $action, $request, $isPost = false, $errors = array()) {

		$promotions = Promotion::getList('SELECT * FROM session');
		$sessions = array();
		foreach($promotions as $key => $session) {

			//$session_date_label = ucfirst(Lang::_(strtolower(date('F', strtotime($session->date_start))))).' '.date('Y', strtotime($session->date_start)).' - '.ucfirst(Lang::_(strtolower(date('F', strtotime($session->date_end))))).' '.date('Y', strtotime($session->date_end));
			$session_date_label = $session->label;

			$sessions[] = array('id' => $session->id, 'name' => $session_date_label);
		}

		$genders = array(array('id' => 1, 'name' => 'Homme'), array('id' => 0, 'name' => 'Femme'));

		$session_id = $request->get('promo', $this->_getfieldvalue('session_id', $type, $request));

		$form = new Form('form-post-'.$type, 'form-post-'.$type, $action, 'POST', 'form-horizontal', $errors, $isPost);
		$form->addField('session_id', Lang::_('Session'), 'select', $session_id, true, '', @$errors['session_id'], null, null, $sessions, ($type == 'update' ? true : false));
		$form->addField('firstname', Lang::_('Firstname'), 'text', $this->_getfieldvalue('firstname', $type, $request), true, '', @$errors['firstname']);
		$form->addField('lastname', Lang::_('Lastname'), 'text', $this->_getfieldvalue('lastname', $type, $request), true, '', @$errors['lastname']);
		$form->addField('gender', Lang::_('Gender'), 'select', $this->_getfieldvalue('gender', $type, $request), true, '', @$errors['gender'], null, null, $genders);
		$form->addField('photo', Lang::_('Photo'), 'file', $this->_getfieldvalue('photo', $type, $request), false, '', @$errors['photo']);
		$form->addField('date_birth', Lang::_('Date de naissance'), 'date', $this->_getfieldvalue('date_birth', $type, $request), true, '', @$errors['date_birth']);
		$form->addField('num_pe', Lang::_('Numero Pole Emploi'), 'text', $this->_getfieldvalue('num_pe', $type, $request), true, '', @$errors['num_pe']);
		$form->addField('from_city', Lang::_('From_city'), 'text', $this->_getfieldvalue('from_city', $type, $request), true, '', @$errors['from_city']);
		$form->addField('email', Lang::_('Email'), 'email', $this->_getfieldvalue('email', $type, $request), false, '', @$errors['email']);
		$form->addField('phone', Lang::_('Phone'), 'text', $this->_getfieldvalue('phone', $type, $request), false, '', @$errors['phone']);

		return $form;
	}

	public function insert() {

		return Db::insert(
			'INSERT INTO student (session_id, firstname, lastname, gender, photo, date_birth, num_pe, from_city, email, phone)
		 	 VALUES (:session_id, :firstname, :lastname, :gender, :photo, :date_birth, :num_pe, :from_city, :email, :phone)',
			array(
				'session_id' => $this->session_id,
				'firstname' => $this->firstname,
				'lastname' => $this->lastname,
				'gender' => $this->gender,
				'photo' => $this->photo,
				'date_birth' => $this->date_birth,
				'num_pe' => $this->num_pe,
				'from_city' => $this->from_city,
				'email' => $this->email,
				'phone' => $this->phone
			)
		);
	}

	public function update() {

		if (empty($this->id)) {
			throw new Exception('Update error - Undefined post id');
		}

		return Db::update(
			'UPDATE student SET session_id = :session_id, firstname = :firstname, lastname = :lastname, gender = :gender, photo = :photo, date_birth = :date_birth, num_pe = :num_pe, from_city = :from_city, email = :email, phone = :phone
		 	 WHERE id = :id',
			array(
				'session_id' => $this->session_id,
				'firstname' => $this->firstname,
				'lastname' => $this->lastname,
				'gender' => $this->gender,
				'photo' => $this->photo,
				'date_birth' => $this->date_birth,
				'num_pe' => $this->num_pe,
				'from_city' => $this->from_city,
				'email' => $this->email,
				'phone' => $this->phone,
				'id' => $this->id
			)
		);
	}

	public function delete() {

		if (empty($this->id)) {
			throw new Exception('Delete error - Undefined student id');
		}

		return Db::delete('DELETE FROM student WHERE id = :id', array('id' => $this->id));
	}


}
