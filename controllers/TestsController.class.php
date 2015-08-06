<?php

class TestsController extends BaseController {

	public function index() {
		$vars = array(
			'title' => "Tests de Fred",
			'description' => "Description",
		);
		echo '<a href="/app/tests/fred">fred</a><br><a href="/app/tests/eric">eric</a><br><a href="/app/tests/man">man</a><br>';
	}

	public function fred() {
		$param = $this->getParam(0, '');
		$vars = array(
			'title' => "Tests de Fred",
			'description' => "Description",
			'id' => null,
			'param' => $param,
		);
		if ($param=='crop') {
			$this->render('tests/tests_fred_crop', $vars);
		} else if ($param=='excel') {

			require_once ROOT_PATH.'public/statics/PHPExcel/Examples/01simple.php';
			//$this->render('tests/tests_fred_excel', $vars);

		} else {

			$this->render('tests/tests_fred', $vars);
		}
	}

	public function eric() {
		$vars = array(
			'title' => "Tests d'Éric",
			'description' => "Description",
		);
		$this->render('tests/tests_eric', $vars);
	}

	public function man() {
		$vars = array(
			'title' => "Tests de Man",
			'description' => "Description",
		);
		$this->render('tests/tests_man', $vars);
	}

}