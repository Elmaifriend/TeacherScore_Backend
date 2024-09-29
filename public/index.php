<?php

declare( strict_types = 1 );
require_once __DIR__ . "/../vendor/autoload.php";

use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Controller\TestController;

$app = AppFactory::create();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware( true, true, true );

$app->get("/hola", [TestController::class, "hola"]);

$app->run();





?>