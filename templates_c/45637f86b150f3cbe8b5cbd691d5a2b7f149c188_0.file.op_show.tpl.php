<?php
/* Smarty version 4.3.1, created on 2023-05-21 07:58:47
  from 'D:\xampp8\htdocs\article\templates\op_show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6469b3172dabe1_73873573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45637f86b150f3cbe8b5cbd691d5a2b7f149c188' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\op_show.tpl',
      1 => 1684648725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469b3172dabe1_73873573 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row p-2">
  <div class="col-md-9">
    <h3><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3>
    <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
</p>
    <article><?php echo nl2br((string) $_smarty_tpl->tpl_vars['news']->value['content'], (bool) 1);?>
</article>

    <!-- 工具列 -->
    <div class="mt-5">
      <a href="javascript:history.back()" class="btn btn-outline-primary"> <i class="fas fa-undo-alt"></i>返回 </a>
      <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="btn btn-outline-warning"> <i class="fas fa-pencil-alt"></i>修改 </a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php?op=destroy&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i>刪除 </a>
      <?php }?>
    </div>
  </div>
  <div class="col-md-3">
    <!-- 縮圖列表 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value['files'], 'thumb', false, 'file');
$_smarty_tpl->tpl_vars['thumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['thumb']->value) {
$_smarty_tpl->tpl_vars['thumb']->do_else = false;
?>
    <a data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" class="img-fluid img-thumbnail mb-3" />
    </a>
    <?php
}
if ($_smarty_tpl->tpl_vars['thumb']->do_else) {
?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/none.png" alt="無圖檔" class="img-fluid img-thumbnail mb-3" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}
