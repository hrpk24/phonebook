<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();


if (isset($_SESSION["id"])) {
    if (isset($_GET["editid"])){
        // mysqli_query($db, "UPDATE `contacts` SET `fname` = '".$_POST["firstname"]."', `lname` = '".$_POST["lastname"]."', `email` = '".$_POST["email"]."', `gender` = '".$_POST["list"]."', `phone` = '".$_POST["Phonenumber"]."', `location` = '".$_POST["location"]."', `cell` = '".$_POST["cell"]."', `country` = '".$_POST["country"]."' WHERE `contacts`.`id` =".$_POST["id"]);
        $qqq= mysqli_query($db, "UPDATE `contacts` SET `fname` = '".$_POST["firstname"]."', `lname` = '".$_POST["lastname"]."', `email` = '".$_POST["email"]."', `gender` = '".$_POST["gender"]."', `phone` = '".$_POST["Phonenumber"]."', `location` = '".$_POST["location"]."', `cell` = '".$_POST["cell"]."', `country` = '".$_POST["country"]."' WHERE `contacts`.`id` =".$_GET["editid"]);
        $change = "body/change/change.tpl";
    } else{
        echo "404 error!";
    }
} else {
    header('location:login.php');
}
//error check
error_reporting(E_ALL);
ini_set('display_errors', '1');
// end error check



$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./templates');
$smarty->setCacheDir('./tmp');

$smarty->display($change);