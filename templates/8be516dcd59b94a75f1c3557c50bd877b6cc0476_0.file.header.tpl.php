<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:33:50
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/header/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de394ebb3a58_83212951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be516dcd59b94a75f1c3557c50bd877b6cc0476' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/header/header.tpl',
      1 => 1658730762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de394ebb3a58_83212951 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175605371062de394ebb0c70_12349589', "title");
?>
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
</head><?php }
/* {block "title"} */
class Block_175605371062de394ebb0c70_12349589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_175605371062de394ebb0c70_12349589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
}
