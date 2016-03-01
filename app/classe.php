<?php

use App\GENERAL\constante;
use App\GENERAL\date;
use App\GENERAL\db;
use App\GENERAL\ErrorContext;
use App\GENERAL\fonction;
use App\GENERAL\ssh;

require dirname(__DIR__)."/app/autoloader.php";
\App\autoloader::register();


$constante = new constante();
$date = new date();
$fonction = new fonction();
$db = new db();
$ssh = new ssh();
$errorContext = new ErrorContext();