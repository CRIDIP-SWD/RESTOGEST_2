<?php
session_start();
require "controller/classe.php";

if(isset($_GET['view'])){
    $view = $_GET['view'];
}else{
    $view = 'index';
}

ob_start();


$content = ob_get_contents();
if($view === 'login'){
    require "view/login.php";
}else{
    require "view/default.php";
}