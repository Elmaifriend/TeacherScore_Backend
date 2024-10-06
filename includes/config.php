<?php

//Mostrar todos los errores en el navegador
ini_set("display_errors", 1 );
ini_set("display_startup_errors", 1 );
error_reporting( E_ALL );

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/DataBase.php";
require_once __DIR__ . "/functions.php";

$dataBase = DataBase::obtenerConexion();

use Model\ActiveRecord;
ActiveRecord::setDB( $dataBase );


?>