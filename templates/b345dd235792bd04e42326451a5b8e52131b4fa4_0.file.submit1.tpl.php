<?php
/* Smarty version 4.1.1, created on 2022-07-25 09:34:20
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/submit/submit1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de477c65b537_57233711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b345dd235792bd04e42326451a5b8e52131b4fa4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/submit/submit1.tpl',
      1 => 1658734418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de477c65b537_57233711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98553059962de477c658a84_65010967', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136798620462de477c65a839_94058362', "cotentn");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../master.tpl');
}
/* {block "title"} */
class Block_98553059962de477c658a84_65010967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_98553059962de477c658a84_65010967',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Edit Contact
<?php
}
}
/* {/block "title"} */
/* {block "cotentn"} */
class Block_136798620462de477c65a839_94058362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_136798620462de477c65a839_94058362',
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
            <h3>Contact successfully registered.</h3>
        </div>
  
  <?php
}
}
/* {/block "cotentn"} */
}
