<?php
/* Smarty version 4.3.1, created on 2023-04-16 09:57:24
  from 'D:\xampp8\htdocs\article\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643baa642fb897_02740529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55ccc71e8082a112b21e1e989c2360b597c166f' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\head.tpl',
      1 => 1681631803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643baa642fb897_02740529 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- 載入 BootStrap5 樣式檔-->
<link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<!-- 載入自訂樣式檔 -->
<link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/css/style.css" rel="stylesheet" />
<!-- 載入 BootStrap5 JS檔 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- 載入 fortawesome 樣式檔-->
<link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
<!-- 引入 jquery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- 引入 fancybox -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
<?php }
}
