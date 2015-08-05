<?php

class PresenceController extends BaseController {

	public function index() {

		if (!User::isLogged()) {
			$this->response->redirect(ROOT_HTTP.'login');
		}

		$day = $this->getParam(0, date('Y-m-d'));


		$session_id = 10;
		$students = Student::getList( 'SELECT * FROM student WHERE session_id='.$session_id );



		foreach($students as $student) {
			$student->setPresence($day);
		}


		$vars = array(
			'title' =>'Feuille de présence WebForce 3',
			'description' => '', // date du jour à indiquer
			'url_trombino' => IMG_HTTP.'trombino/',
			'students' => $students,
		);

		$this->render('presence', $vars);
	}

	public function update() {

		try {

			if (!User::isLogged()) {
				throw new Exception('Not logged');
			}

			$actions = array('r1'=>true, 'r2'=>true, 'd1'=>true, 'd2'=>true, 'absent'=>true);

			$isPost = $this->request->isPost();

			if ($isPost) {

				$student_id = (int) $this->request->post('student_id', '');
				$action = $this->request->post('action', '');
				$day = $this->request->post('day', '');
				$value = (int) $this->request->post('value', 0);

				if (empty($student_id) ||
					empty($action) ||
					empty($day)) {
					throw new Exception('Undefined params');
				}

				if (empty($actions[$action])) {
					throw new Exception('Undefined action');
				}

				if (Utils::isValidTimeStamp($day) === false) {
					$day = strtotime($day);
				}
				$day = date('Y-m-d', $day);

				$vars = array(
					'student_id' => $student_id,
					'day' => $day
				);

				$actions = array(
					$action => $value
				);

				switch($action) {
					case 'r1':
						$actions['r2'] = 0;
						$actions['absent'] = 0;
					break;
					case 'r2':
						$actions['r1'] = 0;
						$actions['absent'] = 0;
					break;
					case 'd1':
						$actions['d2'] = 0;
						$actions['absent'] = 0;
					break;
					case 'd2':
						$actions['d1'] = 0;
						$actions['absent'] = 0;
					break;
					case 'absent':
						$actions['r1'] = 0;
						$actions['r2'] = 0;
						$actions['d1'] = 0;
						$actions['d2'] = 0;
					break;
				}

				$sql_actions = '';
				foreach($actions as $action => $value) {
					$sql_actions .= ', '.$action.' = :'.$action;
					$vars[$action] = $value;
				}

				$vars['update_user_id'] = $this->session->user_id;

				$sql = 'INSERT INTO presence SET student_id = :student_id, day = :day, update_date = NOW(), update_user_id = :update_user_id'.$sql_actions.' ON DUPLICATE KEY UPDATE update_user_id = :update_user_id, update_date = NOW()'.$sql_actions;

				$db = Db::getInstance();
				$query = $db->prepare($sql);
				Db::bindValues($query, $vars);
				$query->execute();

				$result = $db->lastInsertId() || $query->rowCount();

				if (!$result) {
					throw new Exception('Query error');
				}
				exit(json_encode($vars));
			}

		} catch (Exception $e) {
			exit(json_encode(array('error' => $e->getMessage())));
		}
	}

}
