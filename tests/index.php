<?php

date_default_timezone_set('UTC');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);

define('ROOT_PATH', __DIR__);
define('PROJECT_PATH', __DIR__ . '/../');

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);

require_once PROJECT_PATH . '/vendor/autoload.php';

include ROOT_PATH . '/UnitTestCase.php';
