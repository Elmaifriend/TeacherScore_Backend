<?php

namespace Controller;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Class\Render;

class RegisterController{
    
    public static function registerSchool( Request $request, Response $response ) : Response{
        return Render::render( $response, "/register/register_school.php" );
    }


    public static function registerPlantel( Request $request, Response $response ) : Response{
        return Render::render( $response, "/register/register_plantel.php" );
    }


    public static function registerMajor( Request $request, Response $response ) : Response{
        return Render::render( $response, "/register/register_major.php" );
    }


    public static function registerSubject( Request $request, Response $response ) : Response{
        return Render::render( $response, "/register/register_subject.php" );
    }


    public static function registerTeacher( Request $request, Response $response ) : Response{
        return Render::render( $response, "/register/register_teacher.php" );
    }

}

?>