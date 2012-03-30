<?php
//dsasa
$site_path = dirname(__FILE__);

define('__SITE_PATH', $site_path);

include 'includes/init.php';

$registry->template = new Template($registry);

$registry->router = new Router($registry);
$registry->router->setPath(__SITE_PATH . '/controller');
$registry->router->loader();


