<?php
class User extends Model {

	const USER_LEVEL_VISITOR = 1;
	const USER_LEVEL_ADMIN = 2;

	protected $id;
	protected $school_id;
	protected $group_id;
	protected $level;
	protected $name;
	protected $titre;
	protected $photo;
	protected $email;
	protected $password;
	protected $phone;
	protected $infos;

	private $session;

	public function __construct($data = array()) {
		parent::__construct($data);

		$this->session = Session::getInstance();
	}

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
	public function getPassword() {
		return $this->password;
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
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function setInfos($infos) {
		$this->infos = $infos;
	}

	public static function isLogged() {
		return Session::getInstance()->user_id;
	}

	public function checkRememberMe() {

		$remember_me = Authent::getRememberMe();

		if ($remember_me !== false) {

			$user_id = $remember_me;

			$user = self::get($user_id);

			if (!empty($user)) {

				$this->session->user_id = $user->id;
				$this->session->firstname = $user->firstname;

				return true;
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

				$this->session->user_id = $user->id;
				$this->session->firstname = $user->firstname;

				return true;
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

	public function register() {
		return Db::insert('INSERT INTO user (lastname, firstname, email, password, newsletter, cgu, register_date) VALUES (:lastname, :firstname, :email, :password, :newsletter, :cgu, NOW())', array(
					'lastname' => $this->lastname,
					'firstname' => $this->firstname,
					'email' => $this->email,
					'password' => $this->password,
					'newsletter' => $this->newsletter,
					'cgu' => $this->cgu
				));
	}


}