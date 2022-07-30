<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');

$smarty = new Smarty();

if (isset($_POST["login"])) {
    $auth = mysqli_query($db, "SELECT `id`, `email`, `username`, `pass` FROM `user` WHERE `username` = '".$_POST["user"]."' AND `pass` = '".md5($_POST["password"])."';");
    $auth1 = mysqli_fetch_array($auth);
    if (isset($auth1)) {
        header('location:index.php');
        $_SESSION["id"] = $auth1["id"];
    } else {
        $login = "body/login/incorrect.tpl";
    }
}else {
    $login = "body/login/normal.tpl";
}
//error check
error_reporting(E_ALL);
ini_set('display_errors', '1');
// end error check


$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./templates');
$smarty->setCacheDir('./tmp');

$smarty->display($login);