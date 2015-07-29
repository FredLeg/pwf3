<?php
abstract class BaseAdminController extends BaseController {

	public static $pages = array(
		'admin/index/' => array('Dashboard', 'fa-dashboard', User::USER_LEVEL_ADMIN),
        'admin/user/' => array('Utilisateurs', 'fa-file-text', User::USER_LEVEL_ADMIN),
        'admin/school/' => array('Ecoles', 'fa-file-text', User::USER_LEVEL_ADMIN),
        'admin/session/' => array('Sessions', 'fa-file-text', User::USER_LEVEL_ADMIN),
        'admin/student/' => array('Étudiants', 'fa-file-text', User::USER_LEVEL_ADMIN),
	);

	public function __construct() {

		parent::__construct();

		$vars['website_title']       = 'Backoffice';
		$vars['website_description'] = 'Admin Description';
		$vars['author']              = 'Admin Author';

		$vars['pages'] = self::$pages;

		if (!User::isLogged()) {
			$this->response->redirect(ROOT_HTTP.'login');
		}

		if (!$this->isAllowedAccess($this->route, User::USER_LEVEL_VISITOR)) {
			exit('Not allowed access');
		}

		$this->response->addVars($vars);
	}
}