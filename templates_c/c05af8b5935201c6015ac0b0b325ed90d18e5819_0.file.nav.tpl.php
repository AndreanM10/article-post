<?php
/* Smarty version 4.3.1, created on 2023-05-21 08:03:15
  from 'D:\xampp8\htdocs\article\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6469b423e7b6f3_71755952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05af8b5935201c6015ac0b0b325ed90d18e5819' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\nav.tpl',
      1 => 1684648991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469b423e7b6f3_71755952 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-my-blue mb-5">
  <div class="container">
    <a class="navbar-brand" href="/article"><img src="https://campus-xoops.tn.edu.tw/uploads/logo/210105122929.png" alt="校園日誌" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- 導覽列選項 -->
      <ul class="navbar-nav me-auto mb-2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li class="nav-item">
          <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['k']->value) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?cate_id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <!-- 搜尋框 -->
      <form class="d-flex" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php">
        <div class="input-group">
          <input name="keyword" class="form-control border border-end-0" type="search" placeholder="搜尋文章" />
          <button class="btn bg-white border border-start-0" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/logout.php" class="bg-white m-2 px-3 py-1 rounded-2">登出</a>
      <?php }?>
    </div>
  </div>
</nav>
<?php }
}
