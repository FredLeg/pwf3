<?php
abstract class BaseController extends Controller {

	public static $pages = array(
		'home' => array('Home', '', User::USER_LEVEL_VISITOR),
		'post/archives' => array('Archives', '', User::USER_LEVEL_VISITOR),
		'search' => array('Search', '', User::USER_LEVEL_VISITOR),
		'contact' => array('Contact', '', User::USER_LEVEL_VISITOR),
	);

	public function __construct() {

		parent::__construct();

		$vars = array(
			'HTTP_ROOT' => ROOT_HTTP.$this->lang->getUserLang().'/',
			'CSS_ROOT' => CSS_HTTP,
			'JS_ROOT' => JS_HTTP,
			'IMG_ROOT' => IMG_HTTP,
			'referer' => REFERER,
			'uri' => $this->getUri(),
			'querystring' => $this->getQueryString(),
			'current_page' => $this->route,
			'target' => $this->target,
			'action' => $this->action,
			'request' => $this->request,
			'lang' => $this->lang->getUserLang(),
			'website_title' => 'Webforce 3',
			'website_description' => 'Feuille de présence pour Webforce3',
			'author' => 'Eric Madjarian, Fred Legembre, Denis Nerborac',
			'title' => 'Webforce 3',
			'description' => 'Feuille de présence pour Webforce3',
		);

		$vars['pages'] = self::$pages;

		$this->user = new User();
		if (User::isLogged()) {
			$this->user = User::get($this->session->user_id);
		}

		$vars['user'] = $this->user;

		$archives_dates = array();
		for($i = 0; $i < 12; $i++) {
			$time = strtotime('-'.$i.' month');
			$month_value = date('Y-m', $time);
			$month_label = ucfirst(Lang::_(strtolower(date('F', $time))));
			$year = date('Y', $time);
			$archives_dates[$month_value] = $month_label.' '.$year;
		}

		$vars['archives_dates'] = $archives_dates;

		$this->response->addVars($vars);
	}
}
