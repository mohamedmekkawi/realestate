<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'onq8_realestate2';
DB::$user = 'onq8_realestate2';
DB::$encoding = 'utf8';
DB::$password = 'Adam@462011';
DB::$host = 'onq8.com';

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
// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

// URL/event handlers go here
$app->get('/products(/:page)', function($page = 1) use ($app) {
    $perPage = 4;
    $totalCount = DB::queryFirstField ("SELECT COUNT(*) AS count FROM products");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $productList = DB::query("SELECT * FROM products ORDER BY id LIMIT %d,%d", $skip, $perPage);
    $app->render('products.html.twig', array(
        "productList" => $productList,
        "maxPages" => $maxPages
        ));
});

// Products pagination usinx AJAX - main page
$app->get('/newproducts(/:page)', function($page = 1) use ($app) {
    $perPage = 4;
    $totalCount = DB::queryFirstField ("SELECT COUNT(*) AS count FROM products");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $productList = DB::query("SELECT * FROM products ORDER BY id LIMIT %d,%d", $skip, $perPage);
    $app->render('newproducts.html.twig', array(
        "productList" => $productList,
        "maxPages" => $maxPages,
        "currentPage" => $page
        ));
});
// Products pagination usinx AJAX - just the table of products
$app->get('/ajax/newproducts(/:page)', function($page = 1) use ($app) {
    $perPage = 4;
    $totalCount = DB::queryFirstField ("SELECT COUNT(*) AS count FROM products");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $productList = DB::query("SELECT * FROM products ORDER BY id LIMIT %d,%d", $skip, $perPage);
    $app->render('ajaxnewproducts.html.twig', array(
        "productList" => $productList,
        ));
});



require_once 'account.php';

require_once 'admin.php';




$app->run();