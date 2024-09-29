<?php

namespace Class;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;


class Render{
    public static function render( Response $response, $view ){
        $renderer = new PhpRenderer( __DIR__ . "/../views" );
        //$renderer->setLayout("layout.php");
        return $renderer->render( $response, $view );
    }
}

?>