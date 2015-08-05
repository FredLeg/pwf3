<?php
try {

	require_once '../config/core.conf.php';

	header('Content-type: text/html; charset='.Lang::$encoding);

	//$profiler = new Profiler();

	$controller = new ActionController();
	$controller->handle();

	//$profiler->stop();
	//echo $profiler->getSummary();

} catch (Exception $e) {

	$response = new Response();

	$vars = array(
		'title' => 'Erreur',
		'description' => 'Erreur',
	);

//
	$class_exception = get_class($e);
	$msg_exception = $class_exception.' : '.$e->getMessage();

	Logger::log($msg_exception);

	if (CORE_DEBUG) {
		echo '<pre>'.$msg_exception.'</pre>';
		exit();//
    }
//
	if ($e instanceOf AutoloadException || $e instanceOf ActionControllerException) {
        $response->redirect(ROOT_HTTP.'error/404');
	}

	if ($e instanceOf Exception || $e instanceOf ViewException) {
        $response->redirect(ROOT_HTTP.'error/500');
    }

}