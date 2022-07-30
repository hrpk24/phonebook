<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();

if (isset($_SESSION["id"])) {
    if(isset($_GET["editid"])){

    
    $contact = mysqli_query($db, "SELECT * FROM `contacts` WHERE `id` =".$_GET["editid"]);
    // $contacts = mysqli_fetch_array($contact);
        $edit = "body/edit/edit.tpl";
        $result = [];
        while($contacts=mysqli_fetch_array($contact))
        {
            $result[] = $contacts;
        }
}else{
    header('location:index.php');

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

$smarty->display($edit);

