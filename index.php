<?php
session_start();
require "app/classe.php";

if(isset($_GET['view'])){
    $view = $_GET['view'];
}else{
    $view = 'index';
}

ob_start();

if($view === 'test'){require "view/test.php";}

$content = ob_get_contents();
if($view === 'login'){
    require "view/login.php";
}else{
    require "view/default.php";
}