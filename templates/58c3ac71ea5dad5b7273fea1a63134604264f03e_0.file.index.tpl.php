<?php
/* Smarty version 4.1.1, created on 2022-07-25 08:23:40
  from '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62de36ec869784_58946694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c3ac71ea5dad5b7273fea1a63134604264f03e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tellhone/views/body/index/index.tpl',
      1 => 1658730214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de36ec869784_58946694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<html>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150759635262de36ec8511e4_19223572', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137101182962de36ec853488_54194187', "cotentn");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../master.tpl');
}
/* {block "title"} */
class Block_150759635262de36ec8511e4_19223572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_150759635262de36ec8511e4_19223572',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Home
<?php
}
}
/* {/block "title"} */
/* {block "cotentn"} */
class Block_137101182962de36ec853488_54194187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cotentn' => 
  array (
    0 => 'Block_137101182962de36ec853488_54194187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contacts</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Contacts List
                        </div>
                        <form>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <!-- <th>gender</th> -->
                                                <th hidden>id</th>
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Cell</th>
                                                <th>Country</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                            <tr>
                                                <!-- <th>gender</th> -->
                                                <td>Avatar</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['gender'];?>
. <?php echo $_smarty_tpl->tpl_vars['p']->value['fname'];?>
  <?php echo $_smarty_tpl->tpl_vars['p']->value['lname'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['phone'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['location'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['cell'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['country'];?>
</td>
                                                <td><button type="button" class="btn btn-warning" neme="update"
                                                        onclick="location.href='edit.php?editid=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
'">edit</button>
                                                </td>
                                                <td><button type="button" class="btn btn-danger" name="del"
                                                        onclick="location.href='delete.php?delid=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
'">delete</button>
                                                </td>

                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </thead>
                                        <tbody id="tBody"></tbody>
                                    </table>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block "cotentn"} */
}
