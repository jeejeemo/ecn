<?php

session_start();
include_once('model/operations.php');
//include_once('service/databaseService.php');

$page=getPageName();

// var_dump($page);
// die("message");
switch ($page) {

    case 'inscription' :
    include_once('view/inscription.php');
    break;


    
}  