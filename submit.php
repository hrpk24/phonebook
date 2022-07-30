<?php
require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();

if (isset($_SESSION["id"])) {
    if (isset($_POST["add"])) {

        $signup = mysqli_query($db, "INSERT INTO `contacts` (`fname`, `lname`, `email`, `gender`, `phone`, `location`, `cell`, `country`, `userid`) VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["gender"]."', '".$_POST["Phonenumber"]."', '".$_POST["location"]."', '".$_POST["cell"]."', '".$_POST["country"]."', '".$_SESSION["id"]."');");
        $submit = "body/submit/submit1.tpl";
    }else{
        $submit = "body/submit/submit2.tpl";
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

$smarty->display($submit);

