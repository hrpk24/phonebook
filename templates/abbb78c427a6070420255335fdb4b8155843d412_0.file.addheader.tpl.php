<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:02:13
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/header/addheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de31e541e415_86940158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abbb78c427a6070420255335fdb4b8155843d412' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/header/addheader.tpl',
      1 => 1658728931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de31e541e415_86940158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<head>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130681504462de31e5418c55_46213292', "title");
?>
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
</head><?php }
/* {block "title"} */
class Block_130681504462de31e5418c55_46213292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_130681504462de31e5418c55_46213292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
}
