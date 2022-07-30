<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();

if (isset($_SESSION["id"])) {
    if(isset($_GET["delid"])){
        $result= mysqli_query($db, "DELETE FROM contacts WHERE `id` =".$_GET['delid']);
        $delete = "body/delete/delete.tpl";
    } else {
        echo "کد کار نمیکند";
    }
} else {
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

$smarty->display($delete);

