<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:16:23
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/delete/delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de3537679713_48319173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd98b2a58b7124007049540ac230cb2c0042f3c6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/delete/delete.tpl',
      1 => 1658729777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de3537679713_48319173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165398376162de3537670e57_83111890', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4387273362de3537672e06_85353470', "cotentn");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../master.tpl');
}
/* {block "title"} */
class Block_165398376162de3537670e57_83111890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_165398376162de3537670e57_83111890',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Add Contact
<?php
}
}
/* {/block "title"} */
/* {block "cotentn"} */
class Block_4387273362de3537672e06_85353470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_4387273362de3537672e06_85353470',
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
<div class="alert alert-danger" role="alert">
    <h3>Contact successfully Delete.</h3>
</div>

<?php
}
}
/* {/block "cotentn"} */
}
