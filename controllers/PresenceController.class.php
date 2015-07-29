<?php

class PresenceController extends BaseController {

	public function index() {

		$session_id = 10;
		$students = Student::getList( 'SELECT * FROM student WHERE session_id='.$session_id );

		$vars = array(
			'title' =>'Feuille de présence WebForce 3',
			'description' => '', // date du jour à indiquer
			'url_trombino' => IMG_HTTP.'trombino/',
			'pwf3Css' => CSS_HTTP. 'pwf3.css',
			'students' => $students,
		);

		$this->render('presence', $vars);
	}

	public function update() {

		$actions = array('r1'=>true, 'r2'=>true, 'd1'=>true, 'd2'=>true, 'a'=>true);

		$isPost = $this->request->isPost();

		if ($isPost) {

			$student_id = (int) $this->request->post('student_id', '');
			$action = $this->request->post('action', '');
			$date = $this->request->post('date', '');
			$value = (int) $this->request->post('value', 0);

			if (empty($student_id) ||
				empty($action) ||
				empty($date)) {
				exit('Error');
			}

			if (empty($actions[$action])) {
				exit('Error');
			}

			$date = date('Y-m-d', $date);

			$vars = array(
				'student_id' => $student_id,
				$action => $value,
				'date' => $date
			);

			print_r($vars);

			$db = Db::getInstance();
			$query = $db->prepare('INSERT INTO presence SET student_id = :student_id, '.$action.' = :'.$action.', day = :date ON DUPLICATE KEY UPDATE '.$action.' = :'.$action);



			Db::bindValues($query, $vars);
			$query->execute();

			$result = $db->lastInsertId() || $query->rowCount();

			exit($result);
		}
	}

}
