<?php

namespace Controller;
use Class\Render;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PagesController{

    public static function searchUniversity( Request $request, Response $response) : Response{
        return Render::render( $response, "/pages/search-university.php");
    }

    public static function searchPlantel( Request $request, Response $response ) : Response {
        return Render::render( $response, "/pages/search-plantel.php");
    }

    public static function searchMajor( Request $request, Response $response) : Response{
        return Render::render( $response, "/pages/search-major.php");
    }


    public static function searchSubject( Request $request, Response $response) : Response{
        return Render::render( $response, "/pages/search-subject.php");
    }


    public static function searchTeacher( Request $request, Response $response) : Response{
        return Render::render( $response, "/pages/search-teachers.php");
    }


    public static function viewTeacher( Request $request, Response $response) : Response{
        return Render::render( $response, "/pages/view-teacher.php");
    }


}

?>