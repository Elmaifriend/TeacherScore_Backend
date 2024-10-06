<?php

declare( strict_types = 1 );
require_once __DIR__ . "/../vendor/autoload.php";

use Controller\PagesController;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Controller\TestController;
use Controller\RegisterController;

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


//////////////
/// Registration pages
//////////////
$app->get( "/registrar/escuela", [RegisterController::class, "registerSchool"] );
$app->get( "/registrar/plantel", [RegisterController::class, "registerPlantel"] );
$app->get( "/registrar/carrera", [RegisterController::class, "registerMajor"] );
$app->get( "/registrar/materia", [RegisterController::class, "registerSubject"] );
$app->get( "/registrar/profesor", [RegisterController::class, "registerTeacher"] );



$app->run();





?>