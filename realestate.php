<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'onq8_realestate2';
DB::$user = 'onq8_realestate2';
DB::$encoding = 'utf8';
DB::$password = 'Adam@462011';
//DB::$host = 'onq8.com';

// ======================================= ERROR handlers
DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';
function sql_error_handler($params) {
    global $app, $log;
    $log->err("SQL ERROR: " . $params['error']);
    $log->err("in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}
function nonsql_error_handler($params) {
    global $app, $log;
    $log->err("SQL ERROR: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}
// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(   
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));


$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}
// ============================================================= INDEX 

$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);


$app->get('/', function() use ($app) {
  
   $app->render('/indexnew.html.twig');
});


// ============================================================= require
require_once 'register.php';

require_once 'login_logout.php';

require_once 'password_request.php';

require_once 'properties.php';

require_once 'googlemaps.php';

require_once 'search_property.php';




$app->run();