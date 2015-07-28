<?php
abstract class BaseAdminController extends BaseController {

	public function __construct() {

		parent::__construct();

		$vars['website_title'] = 'Backoffice';
		$vars['website_description'] = 'Admin Description';
		$vars['author'] = 'Admin Author';

		$vars['pages'] = array(
			'admin/index/' => array('Dashboard', 'fa-dashboard'),
            'admin/post/' => array('Posts', 'fa-file-text'),
            'admin/contact/' => array('Contacts', 'fa-envelope'),
            'admin/user/' => array('Utilisateurs', 'fa-file-text'),
            'admin/school/' => array('Ecoles', 'fa-file-text'),
            'admin/session/' => array('Sessions', 'fa-file-text'),
            'admin/student/' => array('Étudiants', 'fa-file-text'),
		);

		$this->response->addVars($vars);
	}
}