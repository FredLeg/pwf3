<?php

class LoggerController extends BaseController {


	public function login() {

		$isPost = $this->request->isPost();
		$email = "frederic.legembre@gmail.com";
		$password = "123456";
  		$errors = array();

		if($isPost){
			$email = $this->request->post('email');
			$password = $this->request->post('password');
		}

		$vars = array(
			'title' => 'Logger',
			'description' => 'Page pour se logger',
			'email' => $email,
			'password' => $password,
		);

		$this->render('logger', $vars);
	}


	public function logout() {
		echo "Bye bye";
	}


}