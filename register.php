<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');

if (isset($_POST["signup"])) {

    $signup = mysqli_query($db, "INSERT INTO `user` (`email`, `username`, `pass`) VALUES ('" . $_POST["email"] . "', '".$_POST["user"]."', '" . MD5($_POST["password"]) . "');");
    $go = "body/register/after.tpl";
}else{
    $go = "body/register/before.tpl";
}

//error check
error_reporting(E_ALL);
ini_set('display_errors', '1');
// end error check

$smarty = new Smarty();

$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./templates');
$smarty->setCacheDir('./tmp');

$smarty->display($go);