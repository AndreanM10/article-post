<?php
/* Smarty version 4.3.1, created on 2023-04-08 11:18:19
  from 'D:\xampp8\htdocs\article\templates\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6431315bac3d35_01514092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbaeaf067512e2a74a77441fa85698ef648ad906' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\news.tpl',
      1 => 1680945495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:card.tpl' => 1,
  ),
),false)) {
function content_6431315bac3d35_01514092 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- 依序取出每篇文章 -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_news']->value['data'], 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?> <?php $_smarty_tpl->_subTemplateRender('file:card.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- 分頁工具 -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if (!$_smarty_tpl->tpl_vars['all_news']->value['prev_pages']) {?>disabled<?php }?>">
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['all_news']->value['prev_pages'];?>
">上一頁</a>
    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_news']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value['isCurrent']) {?>active<?php }?>">
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['num'];?>
</a>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li class="page-item <?php if (!$_smarty_tpl->tpl_vars['all_news']->value['next_pages']) {?>disabled<?php }?>">
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['all_news']->value['next_pages'];?>
">下一頁</a>
    </li>
  </ul>
</nav>
<?php }
}
