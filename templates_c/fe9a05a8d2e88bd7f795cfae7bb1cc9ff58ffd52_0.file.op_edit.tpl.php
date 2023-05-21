<?php
/* Smarty version 4.3.1, created on 2023-04-21 11:06:32
  from 'D:\xampp8\htdocs\article\templates\op_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644252185e56c9_42455225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe9a05a8d2e88bd7f795cfae7bb1cc9ff58ffd52' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\op_edit.tpl',
      1 => 1682067961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:op_create.tpl' => 1,
  ),
),false)) {
function content_644252185e56c9_42455225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:op_create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 圖片管理 -->
<div class="row row-cols-1 row-cols-md-4 g-4 my-3">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value['files'], 'thumb', false, 'file');
$_smarty_tpl->tpl_vars['thumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['thumb']->value) {
$_smarty_tpl->tpl_vars['thumb']->do_else = false;
?>
    <div class="col">
      <div class="card h-100">
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
        <div class="card-body">
          <div class="card-text">
            <a href="index.php?op=destroy_file&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
&thumb=<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" class="btn btn-danger">
              <i class="fas fa-times"></i>
              刪除此檔
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
