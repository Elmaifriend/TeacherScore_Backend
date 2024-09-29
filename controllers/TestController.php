<?php

namespace Controller;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Class\Render;

class TestController{
    public static function hola( Request $request, Response $response ) : Response {

        return Render::render( $response, "view-teacher.php" );
    }
}

?>