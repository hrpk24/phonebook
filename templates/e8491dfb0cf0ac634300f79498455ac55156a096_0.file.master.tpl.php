<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:12:06
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de3436ea0960_64567220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8491dfb0cf0ac634300f79498455ac55156a096' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/master.tpl',
      1 => 1658729148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header/header.tpl' => 1,
    'file:./body/nav.tpl' => 1,
    'file:./body/footer.tpl' => 1,
  ),
),false)) {
function content_62de3436ea0960_64567220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<?php $_smarty_tpl->_subTemplateRender('file:./header/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <style>
        body {
            font-family: iran_sans;
            size: 25px;
        }
    </style>
    <div id="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:./body/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div id="page-wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67796847562de3436e9e5e9_59023269', "cotentn");
?>

        </div>
    </div>
        <?php $_smarty_tpl->_subTemplateRender('file:./body/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
/* {block "cotentn"} */
class Block_67796847562de3436e9e5e9_59023269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_67796847562de3436e9e5e9_59023269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "cotentn"} */
}
