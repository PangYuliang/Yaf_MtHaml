<?php
define("APP_PATH",realpath(dirname(__FILE__).'/'));
define("CONFIG_PATH",APP_PATH.'/config/');
$app = new Yaf_Application(APP_PATH.'/config/application.ini');
$app->bootstrap()->run();
