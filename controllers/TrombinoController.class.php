<?php

class TrombinoController extends BaseController {

	public function index() {

		$session_id = 10;
		$students = Student::getList( 'SELECT session_id, firstname, photo, gender FROM student WHERE session_id='.$session_id.' ORDER BY firstname');

		$vars = array(
			'title' => 'Trombinoscope WebForce3',
			'description' => 'Les étudiants de votre groupe',
			'url_trombino' => IMG_HTTP.'trombino/',
			'pwf3Css' => CSS_HTTP. 'pwf3.css',
			'students' => $students,
		);

		$this->render('trombino', $vars);
	}

}
