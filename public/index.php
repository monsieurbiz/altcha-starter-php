<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use Slim\Factory\AppFactory;
use AltchaOrg\AltchaStarterPhp\CorsMiddleware;
use Slim\Exception\HttpNotFoundException;
use Slim\Psr7\Response;

$app = AppFactory::create();

$app->add(new CorsMiddleware());

require __DIR__ . '/../src/routes.php';

try {
    $app->run();
} catch (HttpNotFoundException $e) {
    
}
