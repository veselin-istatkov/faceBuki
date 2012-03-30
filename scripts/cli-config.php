<?php
use Doctrine\ORM\Tools\Setup;

require_once 'Doctrine\ORM\Tools\Setup.php';
Setup::registerAutoloadPEAR();

$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration(array('..\model\Entities'), $isDevMode);

$conn = array(
	'user' => 'root',
	'password' => '',
	'host' => 'localhost',
	'dbname' => 'facebuki',
    'driver' => 'pdo_mysql'
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));