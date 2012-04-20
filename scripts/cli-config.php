<?php

require_once '..\application\Bootstrap.php';

$entityManager = Bootstrap::getInstance();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));