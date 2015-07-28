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


	public function post() {

		$posts = Post::getList('SELECT * FROM posts ORDER BY title ASC');

		$table = new Table('data-table', 'post', $posts, array('id', 'title', 'author', 'date'), ROOT_HTTP.'admin/post/edit', ROOT_HTTP.'admin/post/delete');

		$vars = array(
			'name' => 'Posts',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


	public function contact() {

		$data = Contact::getList('SELECT * FROM contact ORDER BY lastname, firstname');

		$table = new Table('data-table', 'contact', $data, array('id', 'firstname', 'lastname', 'message'), ROOT_HTTP.'admin/contact/edit', ROOT_HTTP.'admin/contact/delete');

		$vars = array(
			'name' => 'Contacts',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


	public function user() {

		$isPost = $this->request->isPost();

		$params = $this->getParams();

		//$action = $params[0]
		//var_export($params);

		$data = User::getList('SELECT * FROM user ORDER BY name ASC');

		$table = new Table('data-table', 'user', $data, array(/*'id', 'school_id', 'group_id',*/ 'name', 'titre'/*, 'photo'*/, 'email', 'phone', 'infos'), ROOT_HTTP.'admin/user/edit', ROOT_HTTP.'admin/user/delete');

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


	public function session() {

		$data = School_Session::getList('SELECT * FROM session ORDER BY date_start ASC');

		$table = new Table('data-table', 'school', $data, array('id', 'school_id', 'date_start', 'date_end'), ROOT_HTTP.'admin/session/edit', ROOT_HTTP.'admin/session/delete');

		$vars = array(
			'name' => 'Sessions',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


	public function student() {

		$data = Student::getList('SELECT * FROM student ORDER BY lastname ASC');

		$table = new Table('data-table', 'student', $data, array('id', 'session_id', 'firstname', 'lastname', 'sex', 'photo', 'date_birth', 'num_pe', 'from_city', 'email', 'phone'), ROOT_HTTP.'admin/student/edit', ROOT_HTTP.'admin/student/delete');

		$vars = array(
			'name' => 'Étudiants',
			'table' => $table->render()
		);

		$this->render('admin/baseTable', $vars);
	}


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


	public function contact_delete() {
		$this->render('admin/contact', array());
	}


	public function search() {

		$vars = array();

		$this->render('admin/search', $vars);
	}
}