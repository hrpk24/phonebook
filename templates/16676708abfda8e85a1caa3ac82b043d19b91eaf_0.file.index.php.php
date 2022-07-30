<?php
/* Smarty version 4.1.1, created on 2022-07-24 12:51:33
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62dd243581f251_44532243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16676708abfda8e85a1caa3ac82b043d19b91eaf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/index.php',
      1 => 1658659755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd243581f251_44532243 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

require_once './user/env.php';
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty = new Smarty();

if (isset($_SESSION["id"])) {

    $index = "body/index.index.tpl";
    $contact = mysqli_query($db, "SELECT `id`, `fname`, `lname`, `email`, `gender`, `phone`, `location`, `cell`, `country`, `userid` FROM `contacts` WHERE `userid`= '".$_SESSION["id"]."';");
    $result = [];

    while($contacts=mysqli_fetch_array($contact))
{
    $result[] = $contacts;
}

}else{
    $index = "body/login/normal.tpl";
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

<?php }
}
