<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:13:22
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/change/change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de3482327319_38145274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904ca8cf0e544961cd22890c7658f20029c006cf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/change/change.tpl',
      1 => 1658729582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de3482327319_38145274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154530167362de34823209f2_86863966', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151608852062de34823223e4_64736529', "cotentn");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../master.tpl');
}
/* {block "title"} */
class Block_154530167362de34823209f2_86863966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_154530167362de34823209f2_86863966',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Change Contact<?php
}
}
/* {/block "title"} */
/* {block "cotentn"} */
class Block_151608852062de34823223e4_64736529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_151608852062de34823223e4_64736529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
</div>
<!-- /.row -->
<div class="alert alert-success" role="alert">
    <h3>Update Contact successfully.</h3>
</div>
<?php
}
}
/* {/block "cotentn"} */
}
