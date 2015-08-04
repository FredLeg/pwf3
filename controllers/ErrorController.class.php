<?php

/*

	voir /public/index.php

*/

class ErrorController extends BaseController {

	public function index() {

		$vars = array(
			'title' => 'Error',
			'description' => 'Error',
		);

		$this->render('404', $vars);
	}

}