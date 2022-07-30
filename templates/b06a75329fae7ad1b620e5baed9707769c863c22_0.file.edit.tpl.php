<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:23:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/edit/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de36eed7a905_93883853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06a75329fae7ad1b620e5baed9707769c863c22' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/edit/edit.tpl',
      1 => 1658730206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de36eed7a905_93883853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96145382462de36eed66399_32723471', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194749761362de36eed68556_03114954', "cotentn");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../master.tpl');
}
/* {block "title"} */
class Block_96145382462de36eed66399_32723471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_96145382462de36eed66399_32723471',
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
class Block_194749761362de36eed68556_03114954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_194749761362de36eed68556_03114954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Contact</h1>
    </div>
</div>
<!-- /.row -->

<!-- ====================== -->
<div class="row">
    <div class="col-lg-6">
    </div>
    <div class="col-lg-12">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="img/google.png" width="200px" height="180px">
            <br>
            <p>Change Profile</p>
            <br>

            <center><input type="file" name="profileavatar"></center>
        </div>
        <br>
        <div class="panel panel-warning">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-12">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <fieldset>
                            <form role="form" action="change.php?editid=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" method="post" id="textViewCount">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" pattern="[a-zA-Z]+"
                                        value="<?php echo $_smarty_tpl->tpl_vars['p']->value['fname'];?>
" required>
                                    <br>

                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['lname'];?>
"
                                        pattern="[a-zA-Z]+">
                                    <br>

                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
" required>
                                    <br>



                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="Mr">Man </option>
                                        <option value="Miss"> Woman</option>
                                    </select>

                                    
                                                            <br>


                                                            <div class="form-group">

                                                                <label>Phone</label>
                                                                <input type="tel" name="Phonenumber" class="form-control" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['phone'];?>
" pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]<?php echo 3;?>
-?[0-9]<?php echo 4;?>
)" required>
                                                                <br>

                                                                <label>Location</label>
                                                                <input type="text" name="location" id="location" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['location'];?>
">
                                                                <br>

                                                                <label>Cell</label>
                                                                <input type="text" name="cell" id="cell" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['cell'];?>
">
                                                                <br>

                                                                <label>Country</label>
                                                                <input type="text" name="country" id="country" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['country'];?>
">
                                                                <br>
                                                            </div>

                                                            <input type="submit" name="edit" class="btn btn-warning btn-lg styless btn-block" value="Submit">
                                                    </form>
                                                    <?php echo '<script'; ?>
 src="js/update.js"><?php echo '</script'; ?>
>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>

                <?php
}
}
/* {/block "cotentn"} */
}
