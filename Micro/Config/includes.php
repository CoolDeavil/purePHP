<?php

require_once('..'.
DIRECTORY_SEPARATOR.'vendor'.
DIRECTORY_SEPARATOR.'autoload.php');

const PSR4_FOLDER = 'Micro';
const PSR4 = 'API';
const ALLOWED_CORS = 'cors.config.php';
const NAV_MENU = 'navigation.php';

const APP_LANG = 'pt';

define('APP_ROOT', realpath('..'.DIRECTORY_SEPARATOR.PSR4_FOLDER).DIRECTORY_SEPARATOR);
define('ALLOWED_CORS_FILE', realpath('..' . DIRECTORY_SEPARATOR . PSR4_FOLDER) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR. ALLOWED_CORS);
define('APP_NAVBAR_FILE', realpath('..' . DIRECTORY_SEPARATOR . PSR4_FOLDER) . DIRECTORY_SEPARATOR . NAV_MENU );
define('APP_ASSET', realpath('..'.DIRECTORY_SEPARATOR.'assets/').DIRECTORY_SEPARATOR);
define('APP_ASSET_BASE', "http://$_SERVER[HTTP_HOST]/");


const APP_VIEWS = APP_ROOT . "Views" . DIRECTORY_SEPARATOR;
const APP_VIEWS_LAYOUT = APP_ROOT . "Views" . DIRECTORY_SEPARATOR. "layout". DIRECTORY_SEPARATOR;
const APP_VIEWS_PARTIALS = APP_ROOT . "Views" . DIRECTORY_SEPARATOR. "partials". DIRECTORY_SEPARATOR;

const MULTI_LANGUAGE = true;
const TRANSLATE = true;
const RENDER_NAV = true;
const RENDER_SIDE_NAV = true;

const ACTIVE_NAV_LINK_CLASS = 'active';


require_once(realpath('../') .
    DIRECTORY_SEPARATOR . PSR4_FOLDER .
    DIRECTORY_SEPARATOR . 'Config' .
    DIRECTORY_SEPARATOR . 'config.routes.regex.php');

$bootstrap = require_once(realpath('../').
	DIRECTORY_SEPARATOR . PSR4_FOLDER.
	DIRECTORY_SEPARATOR . 'Config'.
	DIRECTORY_SEPARATOR . 'bootstrap.php' );

