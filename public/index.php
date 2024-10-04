<?php

declare( strict_types = 1 );
require_once __DIR__ . "/../vendor/autoload.php";

use Controller\PagesController;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Controller\TestController;

$app = AppFactory::create();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware( true, true, true );


//////////////
/// Paginas
/////////////
$app->get( "/", [PagesController::class, "searchUniversity"] );
$app->get( "/buscar/universidad", [PagesController::class, "searchUniversity"] );
$app->get( "/buscar/plantel", [PagesController::class, "searchPlantel"] );
$app->get( "/buscar/carrera", [PagesController::class, "searchMajor"] );
$app->get( "/buscar/materia", [PagesController::class, "searchSubject"] );
$app->get( "/buscar/profesor", [PagesController::class, "searchTeacher"] );
$app->get( "/ver/profesor", [PagesController::class, "viewTeacher"] );


////////////
///Teachers
///////////


$app->run();





?>