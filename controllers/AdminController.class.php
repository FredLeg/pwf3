<?php

class AdminController extends BaseAdminController {

	/*
	public function __construct($controller) {
		parent::__construct($controller);

		// Local stuff...
	}
	*/

	public function index() {

		$this->render('admin/index', []);
	}


	public function user() {

		$isPost = $this->request->isPost();

		$params = $this->getParams();

		//$action = $params[0]
		//var_export($params);

		$data = User::getList('SELECT * FROM user ORDER BY firstname ASC');

		$table = new Table('data-table', 'user', $data, array(/*'id', 'school_id', 'group_id',*/ 'firstname', 'titre'/*, 'photo'*/, 'email', 'phone', 'infos'), ROOT_HTTP.'admin/user/edit', ROOT_HTTP.'admin/user/delete');

		$vars = array(
			'name' => 'Utilisateurs',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


	public function school() {

		$data = School::getList('SELECT * FROM school ORDER BY name ASC');

		$table = new Table('data-table', 'school', $data, array('id', 'name', 'address', 'phone', 'date_creation'), ROOT_HTTP.'admin/school/edit', ROOT_HTTP.'admin/school/delete');

		$vars = array(
			'name' => 'Écoles',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


	public function promotion() {

		$data = Promotion::getList('SELECT * FROM session ORDER BY date_start ASC');

		$table = new Table('data-table', 'school', $data, array('id', 'school_id', 'date_start', 'date_end'), ROOT_HTTP.'admin/session/edit', ROOT_HTTP.'admin/session/delete');

		$vars = array(
			'name' => 'Promotions',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}

/*
	public function student() {

		$data = Student::getList('SELECT * FROM student ORDER BY lastname ASC');

		$table = new Table('data-table', 'student', $data, array('id', 'session_id', 'firstname', 'lastname', 'gender', 'photo', 'date_birth', 'num_pe', 'from_city', 'email', 'phone'), ROOT_HTTP.'admin/student/edit', ROOT_HTTP.'admin/student/delete');

		$vars = array(
			'name' => 'Étudiants',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}
*/

	public function contact_edit() {

		$id = $this->getParam(0, 0);

		$isPost = $this->request->isPost();
		$errors = array();

		$contact = new Contact();
		if (!empty($id)) {
			$contact = Contact::get($id);
			if (empty($contact)) {
				throw new Exception('Undefined contact with id = ['.$id.']');
			}
		}

		// $id, $name, $action, $method, $class, $errors, $isPost
		$form = $contact->getForm('form-contact-admin', 'form-contact-admin', ROOT_HTTP.'admin/contact', 'POST', 'form-horizontal', $errors, $isPost);

		$vars['form'] = $form;

		$this->render('admin/contact', $vars);
	}


	public function student() {
		return $this->base_list_sql('student', array('firstname', 'email'), 'SELECT * FROM student WHERE session_id = 10');
//		return $this->base_list_sql('student', array('fullname', 'email'), 'SELECT *, CONCAT(firstname," ",lastname) as fullname FROM student WHERE session_id = 10');
	}

	public function student_action() {
		return $this->base_action('student');
	}


	/* TODO: remove */

	public function post() {
		return $this->base_list('post', array('id', 'title', 'author', 'date'));
	}

	public function post_action() {
		return $this->base_action('post');
	}

	public function contact() {
		return $this->base_list('contact', array('id', 'firstname', 'lastname', 'message'), 'lastname, firstname');
	}

	public function contact_action() {
		return $this->base_action('contact');
	}

	public function presence() {

		$presences = array(
			array('Type', 'Count'),
			array('r1', 10),
			array('r2', 20),
			array('d1', 3),
			array('d2', 0),
			array('absent', 10),
		);

		$this->response->addVar('presences_data', json_encode($presences));

		return $this->base_list('presence', array('student_id', 'day', 'r1', 'r2', 'd1', 'd2', 'absent', 'motif'));
	}

	public function presence_action() {
		return $this->base_action('presence');
	}

	public function search() {

		$vars = array();

		$this->render('admin/search', $vars);
	}
}
