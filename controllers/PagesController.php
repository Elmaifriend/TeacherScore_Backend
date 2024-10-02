<?php

namespace Controller;
use Class\Render;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PagesController{

    public static function searchUniversity( Request $request, Response $response) : Response{
        return Render::render( $response, "search-university.html");
    }


    public static function serachMajor( Request $request, Response $response) : Response{
        return Render::render( $response, "search-major.php");
    }


    public static function searchSubject( Request $request, Response $response) : Response{
        return Render::render( $response, "search-subject.php");
    }


    public static function searchTeacher( Request $request, Response $response) : Response{
        return Render::render( $response, "search-teachers.php");
    }


    public static function viewTeacher( Request $request, Response $response) : Response{
        return Render::render( $response, "view-teacher.php");
    }


}

?>