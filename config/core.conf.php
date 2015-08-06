<?php
// DEBUG
define('CORE_DEBUG', 1);

// PATHS
define('CONFIG_DIR', 'config');
define('ROOT_DIR_old', trim(str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(array(DIRECTORY_SEPARATOR, CONFIG_DIR), array('/', ''), __DIR__)), '/'));
if ( strlen(dirname(__DIR__)) > strlen($_SERVER['DOCUMENT_ROOT']) ) {
	define('ROOT_GAP', str_replace(DIRECTORY_SEPARATOR,'/',substr( dirname(__DIR__) , strlen($_SERVER['DOCUMENT_ROOT']))) );
} else {
	define('ROOT_GAP', '');
}
define('ROOT_DIR', substr(ROOT_GAP,1));
//define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.ROOT_DIR.'/');
define('ROOT_PATH', str_replace(DIRECTORY_SEPARATOR,'/',dirname(__DIR__)).'/');
//define('ROOT_HTTP', 'http'.(!empty($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER['HTTP_HOST'].'/'.ROOT_DIR.'/');
define('ROOT_HTTP','http'.(!empty($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER['HTTP_HOST'].ROOT_GAP.'/');

if ( false and $_SERVER['HTTP_HOST'] != 'localhost' ) {
	echo 'HTTP_HOST &#9830; '.$_SERVER['HTTP_HOST'].'<br>';
	echo '__DIR__ &#9830; '.__DIR__.'<br>';
	echo 'CONFIG_DIR &#9830; '.CONFIG_DIR.'<br>';
	echo 'ROOT_DIR_old &#9830; '.ROOT_DIR_old.'<br>';
	echo 'ROOT_DIR &#9830; '.ROOT_DIR.'<br>';
	echo 'str_replace1 &#9830; '.str_replace(array('\\', CONFIG_DIR), array('/', ''), __DIR__).'<br>';
	echo '$_SERVER[DOCUMENT_ROOT] &#9830; '.$_SERVER['DOCUMENT_ROOT'].'<br>';
	echo 'ROOT_GAP &#9830; '.ROOT_GAP.'<br>';
	echo '<br>';
	echo 'ROOT_PATH &#9830; '.ROOT_PATH.'<br>';
	echo 'ROOT_HTTP &#9830; '.ROOT_HTTP.'<br>';
	echo '<th>';
}

define('CURRENT_URI', trim(str_replace(ROOT_DIR, '', $_SERVER['REQUEST_URI']), '/'));
define('CURRENT_PATH', parse_url(CURRENT_URI, PHP_URL_PATH));

define('CORE_PATH', ROOT_PATH.'core/');
define('MODELS_PATH', ROOT_PATH.'models/');
define('CONTROLLERS_PATH', ROOT_PATH.'controllers/');

define('LOGS_PATH', ROOT_PATH.'logs/');
define('CACHE_PATH', ROOT_PATH.'cache/');
define('UPLOADS_PATH', ROOT_PATH.'public/uploads/');
define('LOCALE_PATH', ROOT_PATH.'lang/');

define('STATICS_PATH', ROOT_PATH.'public/statics/');
define('CSS_PATH', STATICS_PATH.'css/');
define('JS_PATH', STATICS_PATH.'js/');
define('IMG_PATH', STATICS_PATH.'img/');

define('STATICS_HTTP', ROOT_HTTP.'public/statics/');
define('CSS_HTTP', STATICS_HTTP.'css/');
define('JS_HTTP', STATICS_HTTP.'js/');
define('IMG_HTTP', STATICS_HTTP.'img/');

// CONTROLLERS
define('DEFAULT_CONTROLLER_TARGET', 'home');
define('DEFAULT_CONTROLLER_ACTION', 'index');

// TEMPLATES/SMARTY
define('TPL_PATH', ROOT_PATH.'views/');
define('TPL_CACHE_PATH', ROOT_PATH.'cache/views/');
define('TPL_DEBUGGING', false);
define('TPL_CACHING', false);
define('TPL_FORCE_COMPILE', true);

// REFERER
define('REFERER', !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');

// SESSION CONFIG
define('SESSION_DISABLED', false);
define('SESSION_DEFAULT_NAME', 'framework_session');

// DB CONFIG
if ($_SERVER['HTTP_HOST'] == 'localhost') {
	define('DB_HOST', 'localhost'); //localhost   192.168.1.19  //ERIC 192.168.1.36
	define('DB_USER', 'root');      //root      pwf3_user
	define('DB_PASS', '');
} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
}
define('DB_ENGINE', 'mysql');
define('DB_NAME', 'pwf3');

// ERRORS CONFIG
error_reporting((CORE_DEBUG ? (E_ALL | E_STRICT) : 0));
ini_set('display_errors', (CORE_DEBUG ? 1 : 0));

// CHECK ROOT_PATH
if (!is_dir(ROOT_PATH)) {
	$error = 'ROOT_PATH ('.ROOT_PATH.') not found in '.__FILE__;
	error_log($error, 3, ini_get('error_log'));
	if (CORE_DEBUG) {
    	exit($error);
	}
	exit();
}

// AUTO LOAD
require_once('autoload.conf.php');

// CRYPT
if (!function_exists('password_hash')) {
	require_once('crypt.compat.php');
}

// PHP < 5.3
if (false === function_exists('lcfirst')) {
    function lcfirst($str) {
        return Utils::lcfirst($str);
    }
}

// ROUTES
require_once('routes.conf.php');
