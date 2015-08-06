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

		function myEmpty($value){
			return (strlen(''.$value)==0);
		}
//if ($this->user->firstname == 'fred'){
//echo 'user->school_id &#9830; '.$this->user->school_id.'<br>';
//echo (int)empty($this->request->get('school')).'<br>';
//echo $this->request->get('school', 0).'<br>';
//echo 'empty(user->school_id) &#9830; '.(int)myEmpty($this->user->school_id).'<br>';
//}
		$school_id = ( !myEmpty($this->user->school_id) ? $this->user->school_id : 1 );

//if ($this->user->firstname == 'fred') echo '$school_id &#9830; '.$school_id.'<br>';

		$school_id = ( !empty($this->request->get('school')) ? $this->request->get('school') : $school_id );

//if ($this->user->firstname == 'fred') echo '$school_id &#9830; '.$school_id.'<br>';

		$schools = '';
		if ($this->user->isRole('admin') or $this->user->isRole('pdt')) {
			$schools = School::getList('SELECT * FROM school ORDER BY name DESC');
		}
		$where = '';
		$where = 'AND school_id='.$school_id;
		if ($this->user->isRole('admin'))  $where = 'AND school_id='.$school_id;
		if ($this->user->isRole('pdt'))    $where = 'AND school_id='.$school_id;
		if ($this->user->isRole('dir')) {
			$school_id = $this->user->school_id;
			$where = 'AND school_id='.$school_id;
		}
		if ($this->user->isRole('prof'))   $where = 'AND school_id='.$school_id;
		$promos = Promotion::getList('SELECT * FROM session WHERE true '.$where.' ORDER BY date_start DESC');
		function currentPromo_id( $promos ){
			$now =  date('Y-m-d');
			foreach ($promos as $index => $promo) {
				if ( $now >= $promo->date_start and $now <= $promo->date_end ) return $promo->id;
			}
			if (!empty($promo[0])) {
				return $promo[0]->id;
			} else {
				return '0';
			}
		}
		$promo_id = $this->request->get('promo', 0);
		if ($promo_id==0) $promo_id = currentPromo_id( $promos );

		$students = Student::getList('SELECT s.*, CONCAT(s.firstname," ",s.lastname)as fullname FROM student as s, session as p WHERE p.id=s.session_id AND p.id='.$promo_id);
		$edit_url   = ( $this->user->canDo('student_update') ? ROOT_HTTP.'admin/student/update' : '' );
		$delete_url = ( $this->user->canDo('student_delete') ? ROOT_HTTP.'admin/student/delete' : '' );
		$tableStudents = new Table('data-table', 'student', $students, ['id', 'fullname', 'email'], $edit_url, $delete_url);

//if ($this->user->firstname == 'fred') echo '$school_id &#9830; '.$school_id.'<br>';

		$vars = [
			'canAddStudent' => $this->user->canDo('student_create'),
			'schools' => $schools,
			'school_id' => $school_id,
			'promos' => $promos,
			'promo_id' => $promo_id,
			'table' => $tableStudents->render(), // pour base.tpl
		];
		$this->render('admin/student', $vars);

	}


	public function student_action() {
		return $this->base_action('student');
	}

	public function stajax() {
		echo "hello ajax";
	}

	public function excel() {
		echo '<h1>Excel</h1>';
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
