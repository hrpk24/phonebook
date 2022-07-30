<?php
/* Smarty version 4.1.1, created on 2022-07-25 10:44:58
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/secmaster.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de580a1997d4_17274577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f67e0525cbf6967977d2c99ed9859d8ce0aeea' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/secmaster.tpl',
      1 => 1658738674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header/loginheader.tpl' => 1,
    'file:body/loginfooter.tpl' => 1,
  ),
),false)) {
function content_62de580a1997d4_17274577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<?php $_smarty_tpl->_subTemplateRender('file:./header/loginheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="forny-container" dir="ltr">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73078312262de580a197439_63978682', "cotentn");
?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:body/loginfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
/* {block "cotentn"} */
class Block_73078312262de580a197439_63978682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_73078312262de580a197439_63978682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "cotentn"} */
}
