<?php
/* Smarty version 4.3.1, created on 2023-04-08 09:38:17
  from 'D:\xampp8\htdocs\article\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643119e908ae67_00851965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51208b9ccb72a9480bf8d2b032002f8dca009126' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\card.tpl',
      1 => 1680939491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643119e908ae67_00851965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-3 border border-5 border-bottom-0 border-start-0 border-end-0 py-4">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?op=show&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
        </h5>
        <p class="card-text">
          <small><?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
 </small>
        </p>
        <p class="card-text">
          <small class="text-muted"> <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
 <i class="far fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['news']->value['counter'];?>
 </small>
        </p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['news']->value['summary'];?>
</p>
      </div>
    </div>
    <div class="col-md-4">
      <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?op=show&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['news']->value['files']) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo reset($_smarty_tpl->tpl_vars['news']->value['files']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
" class="img-fluid img-thumbnail" />
        <?php } else { ?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/none.png" alt="無圖檔" class="img-fluid img-thumbnail" />
        <?php }?>
      </a>
    </div>
  </div>
</div>
<?php }
}
