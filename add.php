<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();
    // $title = "addddd";

if (isset($_SESSION["id"])) {
    $add = "body/add/add.tpl";
}else{
    header('location:login.php');
}

//error check
error_reporting(E_ALL);
ini_set('display_errors', '1');
// end error check

$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./templates');
$smarty->setCacheDir('./tmp');

$smarty->display($add);