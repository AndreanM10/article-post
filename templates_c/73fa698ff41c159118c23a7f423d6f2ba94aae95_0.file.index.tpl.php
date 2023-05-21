<?php
/* Smarty version 4.3.1, created on 2023-04-16 09:52:59
  from 'D:\xampp8\htdocs\article\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643ba95b172310_72726369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fa698ff41c159118c23a7f423d6f2ba94aae95' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\index.tpl',
      1 => 1681631501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_643ba95b172310_72726369 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>校園日誌</title>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
      <div class="row">
        <div class="col-md-9"><?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
        <div class="col-md-3"><?php $_smarty_tpl->_subTemplateRender('file:aside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
      </div>
    </div>
  </body>
</html>
<?php }
}
