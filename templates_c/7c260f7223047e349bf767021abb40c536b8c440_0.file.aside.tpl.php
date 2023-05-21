<?php
/* Smarty version 4.3.1, created on 2023-04-21 09:40:50
  from 'D:\xampp8\htdocs\article\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64423e0251b222_77790412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c260f7223047e349bf767021abb40c536b8c440' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\aside.tpl',
      1 => 1682062824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64423e0251b222_77790412 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_count']->value, 'yc');
$_smarty_tpl->tpl_vars['yc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['yc']->value) {
$_smarty_tpl->tpl_vars['yc']->do_else = false;
?>
  <a href="index.php?year=<?php echo $_smarty_tpl->tpl_vars['yc']->value['year'];?>
" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php if ($_smarty_tpl->tpl_vars['year']->value == $_smarty_tpl->tpl_vars['yc']->value['year']) {?>active<?php }?>" aria-current="true">
    <?php echo $_smarty_tpl->tpl_vars['yc']->value['year'];?>

    <span class="badge bg-success rounded-pill"><?php echo $_smarty_tpl->tpl_vars['yc']->value['count'];?>
</span>
  </a>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
  <div class="d-grid gap-2 mt-3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php" class="btn btn-primary">
      <i class="fas fa-pencil-alt"></i> 新增文章
    </a>
  </div>
<?php }
}
}
