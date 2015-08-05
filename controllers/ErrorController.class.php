<?php

/*

	voir /public/index.php

*/

class ErrorController extends BaseController {

	public function index() {

		$error = $this->getParam(0, 500);

		$vars = array(
			'title' => 'Error',
			'description' => 'Error',
		);

		$this->render($error, $vars);
	}

}