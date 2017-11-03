<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'onq8_realestate';
DB::$user = 'onq8_realestate';
DB::$encoding = 'utf8';
DB::$password = 'Adam@462011';

$app->run();

