<?php
require('../../config/core.conf.php');

$session = Session::getInstance(SESSION_DEFAULT_NAME);

$user = User::getById(7);


echo '<pre>';
echo print_r($user);
echo '</pre>';

echo 'id: '.$user->id .'<br>';
echo 'nom: '.$user->firstname .'<br>';
echo 'isLogged: '.(int) User::isLogged() .'<br>';
echo 'session->isActive: '.(int) $user->session->isActive() .'<br>';

echo 'TEST >> '.var_dump(User::isLogged());

/*
$pwd = password_hash('123456', PASSWORD_BCRYPT);

echo 'pwd: '.$pwd .'<br>';

$user->password = $pwd;


function register( $user ) {
		return Db::insert(
		   'UPDATE user SET password = :password WHERE id= :id',
			array(
				':id' => $user->id,
				':password' => $user->password,
			)
		);
	}

echo 'register: '.register($user);

*/