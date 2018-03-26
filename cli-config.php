<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\Dotenv\Dotenv;

include_once __DIR__ . '/var/bootstrap.php.cache';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$connectionOptions = [
    'driver'   => 'pdo_mysql',
    'host'     => getenv('DB_HOST'),
    'dbname'   => getenv('DB_DATABASE'),
    'user'     => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD')
];

// Any way to access the EntityManager from  your application
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/src/EasyVocabularyBundle/Entity'], true, null, null, false);
$em = EntityManager::create($connectionOptions, $config);
$platform = $em->getConnection()->getDatabasePlatform();
$platform->registerDoctrineTypeMapping('enum', 'string');

$helperSet = new \Symfony\Component\Console\Helper\HelperSet([
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
]);

return $helperSet;
