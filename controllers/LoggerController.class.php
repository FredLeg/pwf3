<?php

class LoggerController extends BaseController {


	public function login() {

		$isPost = $this->request->isPost();
		$email = $this->request->post('email');
  		$errors = array();

		if($isPost){

		}

		$vars = array(
			'title' => 'Logger',
			'description' => 'Page pour se logger',
			'email' => $email,
		);

		$this->render('logger', $vars);
	}


	public function logout() {
		echo "Bye bye";
	}


}