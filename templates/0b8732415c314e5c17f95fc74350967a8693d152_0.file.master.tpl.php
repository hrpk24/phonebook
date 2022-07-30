<?php
/* Smarty version 4.1.1, created on 2022-07-25 07:48:10
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/add/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de2e9a97c9a9_45504607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b8732415c314e5c17f95fc74350967a8693d152' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/add/master.tpl',
      1 => 1658728089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../nav.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_62de2e9a97c9a9_45504607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20096008762de2e9a977384_87160552', "title");
?>


<body>
    <style>
        body {
            font-family: iran_sans;
            size: 25px;
        }
    </style>
    <div id="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:../nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Contact</h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- ====================== -->
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-12">
                    <div style="text-align:center; margin-bottom:10px;">
                        <img src="img/demoavatar.png" width="200px" height="180px">
                        <br>
                        <p>Change Profile</p>
                        <br>

                        <center><input type="file" name="profileavatar"></center>
                    </div>
                    <br>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Add
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    <!-- <fieldset> -->
                                    <form action="submit.php" method="post">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="firstname" class="form-control" pattern="[a-zA-Z]+"
                                                required>
                                            <br>

                                            <label>Last Name</label>
                                            <input type="text" name="lastname" class="form-control" pattern="[a-zA-Z]+">
                                            <br>

                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                            <br>

                                            <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="Mr">Man </option>
                                                <option value="Miss"> Woman</option>
                                            </select>
                                            <br>


                                            <div class="form-group">

                                                <label>Phone Number</label>
                                                <input type="tel" name="Phonenumber" class="form-control" maxlength="11"
                                                    required>
                                                <br>

                                                <label>Location</label>
                                                <input type="text" name="location" id="location" class="form-control">
                                                <br>

                                                <label>Cell</label>
                                                <input type="text" name="cell" id="cell" class="form-control">
                                                <br>

                                                <label>Country</label>
                                                <input type="text" name="country" id="country" class="form-control">
                                                <br>
                                                <!-- <input type="submit" name="add" class="btn btn-success btn-lg styless btn-block" value="Submit"> -->
                                                <!-- <input type="submit" name="edit" class="btn btn-warning btn-lg styless btn-block" value="Submit"> -->
                                                <button type="submit" class="btn btn-success btn-lg styless btn-block"
                                                    name="add">Submit</button>
                                            </div>

                                    </form>
                                    <!-- <?php echo '<script'; ?>
 src="js/create.js"><?php echo '</script'; ?>
> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- ====================================== -->
        </div>
    </div>
        <?php $_smarty_tpl->_subTemplateRender('file:../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../header/addheader.tpl');
}
/* {block "title"} */
class Block_20096008762de2e9a977384_87160552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20096008762de2e9a977384_87160552',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Page Title
<?php
}
}
/* {/block "title"} */
}
