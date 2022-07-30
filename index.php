<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();

if (isset($_SESSION["id"])) {

    $index = "body/index/index.tpl";
    $contact = mysqli_query($db, "SELECT `id`, `fname`, `lname`, `email`, `gender`, `phone`, `location`, `cell`, `country`, `userid` FROM `contacts` WHERE `userid`= '".$_SESSION["id"]."';");
    $result = [];

    while($contacts=mysqli_fetch_array($contact))
{
    $result[] = $contacts;
}

}else{
    // $index = "body/login/normal.tpl";
    header('location:login.php');

}    
//error check
error_reporting(E_ALL);
ini_set('display_errors', '1');
// end error check

$smarty->assign('result', $result);


$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./templates');
$smarty->setCacheDir('./tmp');

$smarty->display($index);

