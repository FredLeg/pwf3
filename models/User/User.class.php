<?php
class User extends Model {

	protected $roles =  [
		'admin'  => [7,2,4,10,11],
		'pdt'    => [1],
		'dir'    => [3,9],
		'prof'   => [2,4,5,6,8],
		'dev'    => [7,4,10,11],
	];

	protected $roles_func =  [
		'student_create'  => ['admin','dir'],  // ajouter un étudiant
		'student_update'  => ['admin','dir'],  // modifier un étudiant
		'student_delete'  => ['admin','dir'],  // supprimer un étudiant
	];

	public function canDo($func) {
		if (!isset($this->roles_func[$func])) {
			return false;
		}
		$roles = $this->getRoles();
		foreach( $roles as $role) {
			if (in_array($role, $this->roles_func[$func])) {
				return true;
			}
		}
		return false;
	}

	const USER_LEVEL_VISITOR = 1;
	const USER_LEVEL_ADMIN = 2;

	protected $id;
	protected $school_id;
	protected $group_id;
	protected $level;
	protected $firstname;
	protected $titre;
	protected $photo;
	protected $email;
	protected $password;
	protected $phone;
	protected $infos;

	public $session; // private

	public function __construct($data = array()) {

		parent::__construct($data);

		$this->session = Session::getInstance();
	}


	/* Rôles --------------------------------------------------------------- */
	public function getRoles() {
		$arr_roles = [];
		$user_id = $this->id;
		foreach ($this->roles as $key => $values) {
			if (in_array($user_id, $values)) $arr_roles[] = $key;
		}
		return $arr_roles;
	}
	public function isRole( $role_name ) {
		return in_array($this->id, $this->roles[$role_name]);
	}
	public function getReadRoles() {
		return $this->roles;
	}

	/* Getters ------------------------------------------------------------- */
	public function getId() {
		return $this->id;
	}
	public function getSchoolId() {
		return $this->school_id;
	}
	public function getGroupId() {
		return $this->group_id;
	}
	public function getLevel() {
		return $this->level;
	}
	public function getFirstname() {
		return $this->firstname;
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
	public function getPassword() {
		return $this->password;
	}
	public function getPhone() {
		return $this->phone;
	}
	public function getInfos() {
		return $this->infos;
	}


	/* Setters ------------------------------------------------------------- */
	public function setId($id) {
		$this->id = $id;
	}
	public function setSchoolId($school_id) {
		$this->school_id = $school_id;
	}
	public function setGroupId($group_id) {
		$this->group_id = $group_id;
	}
	public function setLevel($level) {
		$this->level = $level;
	}
	public function setFirstname($firstname) {
		if (empty($firstname)) {
			throw new Exception(Lang::_('You must fill your name'));
		}
		$this->firstname = $firstname;
	}
	public function setTitre($titre) {
		$this->titre = $titre;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function setEmail($email) {
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception(Lang::_('You must provide a valid email'));
		}
		$this->email = $email;
	}
	public function setPassword($password) {
		if (strlen($password) < 6) {
			throw new Exception(Lang::_('You must provide a password with at least 6 chars'));
		}
		$this->password = $password;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	public function setNewsletter($newsletter) {
		$this->newsletter = $newsletter;
	}
	public function setCgu($cgu) {
		if (empty($cgu)) {
			throw new Exception(Lang::_('You have to accept the terms of service'));
		}
		$this->cgu = $cgu;
	}
	public function setInfos($infos) {
		$this->infos = $infos;
	}


	/* Misc  ------------------------------------------------------------- */

	public static function isLogged() {
		$user_id = Session::getInstance()->user_id;
		return !empty($user_id);
	}


	public function checkRememberMe() {

		$remember_me = Authent::getRememberMe();

		if ($remember_me !== false) {

			$user_id = $remember_me;

			$user = self::get($user_id);

			if (!empty($user)) {
				return $user->login();
			}
		}

		return false;
	}


	public function checkLogin($remember_me = false) {

		$result = Db::selectOne('SELECT * FROM user WHERE email = :email', array('email' => $this->email));

		if (!empty($result)) {

			$user = new User($result);

			$crypted_password = $user->password;

			if (password_verify($this->password, $crypted_password)) {

				if (!empty($remember_me)) {
					Authent::setRememberMe($user->id);
				}

				return $user->login();
			}
		}
		return false;
	}


	public function checkAlreadyExists() {
		if (empty($this->email)) {
			return false;
		}
		$user = Db::select('SELECT * FROM user WHERE email = :email', array('email' => $this->email));
		if (!empty($user)) {
			return true;
		}
		return false;
	}


	public function getLoginForm($type, $action, $request, $isPost = false, $errors = array()) {

		$form = new Form('', 'form-login', $action, 'POST', 'form-horizontal', $errors, $isPost);
		$form->addField('email', Lang::_('Email'), 'email', $this->_getfieldvalue('email', $type, $request), true, '', !empty($errors['authent']) ? true : false);
		$form->addField('password', Lang::_('Password'), 'password', '', true, '', !empty($errors['authent']) ? true : false);
		//$form->addField('remember_me', Lang::_('Remember me'), 'checkbox', $this->_getfieldvalue('remember_me', $type, $request), false, '');

		return $form;
	}


	public function login() {

		if (!$this->session->isActive()) {
			return false;
		}

		$this->session->user_id = $this->id;
		$this->session->firstname = $this->firstname;

		return true;
	}


	public function getRegisterForm($type, $action, $request, $isPost = false, $errors = array()) {

		$form = new Form('', 'form-register', $action, 'POST', 'form-horizontal', $errors, $isPost);
		$form->addField('firstname', Lang::_('Firstname'), 'text', $this->_getfieldvalue('firstname', $type, $request), true, '', @$errors['firstname']);
		//$form->addField('lastname', Lang::_('Lastname'), 'text', $this->_getfieldvalue('lastname', $type, $request), true, '', @$errors['lastname']);
		$form->addField('email', Lang::_('Email'), 'email', $this->_getfieldvalue('email', $type, $request), true, '', @$errors['email']);
		$form->addField('confirm_email', Lang::_('Confirm email'), 'email', $this->_getfieldvalue('confirm_email', $type, $request), true, '', @$errors['confirm_email']);
		$form->addField('password', Lang::_('Password'), 'password', '', true, '', @$errors['password']);
		$form->addField('confirm_password', Lang::_('Confirm password'), 'password', '', true, '', @$errors['confirm_password']);
		$form->addField('newsletter', Lang::_('Subscribe to the newsletter'), 'checkbox', $this->_getfieldvalue('newsletter', $type, $request), false, '');
		$form->addField('cgu', Lang::_('Accept the terms of service'), 'checkbox', $this->_getfieldvalue('cgu', $type, $request), true, '', @$errors['cgu']);

		return $form;
	}


	public function register() {
		return Db::insert(
		   'INSERT INTO user (firstname, email, password, newsletter, cgu, register_date)
			VALUES (:firstname, :email, :password, :newsletter, :cgu, NOW())',
			array(
				//'lastname' => $this->lastname,
				'firstname' => $this->firstname,
				'email' => $this->email,
				'password' => $this->password,
				'newsletter' => $this->newsletter,
				'cgu' => $this->cgu
			)
		);
	}


	public function getFacebookUser($register_url) {

		$fb_user = API_Facebook::getUser($register_url);

		if (empty($fb_user) || !is_object($fb_user)) {
			return false;
		}

		foreach($this->getFields() as $key => $value) {
			if (property_exists($fb_user, $key)) {
				$this->$key = $fb_user->$key;
			}
		}

		// @FIXME
		$this->password = password_hash($this->fb_id.'-'.$this->email, PASSWORD_BCRYPT);

		$fb_user = Db::selectOne('SELECT * FROM user WHERE fb_id = :fb_id', array('fb_id' => $this->fb_id));
		if (!empty($fb_user)) {
			$user = new User($fb_user);
			return $user->login();
		}

		$this->id = $this->facebookRegister();
		if (!empty($this->id)) {
			return $this->login();
		}
	}


	public function facebookRegister() {
		return Db::insert(
			'INSERT INTO user SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, fb_id = :fb_id, cgu = 1, register_date = NOW()
			 ON DUPLICATE KEY UPDATE firstname = :firstname, lastname = :lastname, email = :email, password = :password, fb_id = :fb_id, cgu = 1',
			 array(
				'fb_id' => $this->fb_id,
				'firstname' => $this->firstname,
			//	'lastname' => $this->lastname,
				'email' => $this->email,
				'password' => $this->password
			 )
		);
	}


}
