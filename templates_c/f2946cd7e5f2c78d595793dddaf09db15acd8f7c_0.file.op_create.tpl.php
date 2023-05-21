<?php
/* Smarty version 4.3.1, created on 2023-05-21 07:56:45
  from 'D:\xampp8\htdocs\article\templates\op_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6469b29d6d71d4_10525116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2946cd7e5f2c78d595793dddaf09db15acd8f7c' => 
    array (
      0 => 'D:\\xampp8\\htdocs\\article\\templates\\op_create.tpl',
      1 => 1684648604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469b29d6d71d4_10525116 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php" method="post" enctype="multipart/form-data" class="p-2">
  <div class="row mb-3">
    <label for="title" class="col-md-2 col-form-label"> 文章標題 </label>
    <div class="col-md-10">
      <input type="text" name="title" id="title" class="form-control" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="info" class="col-md-2 col-form-label"> 相關資訊 </label>
    <div class="col-md-10">
      <input type="text" name="info" id="info" class="form-control" placeholder="可輸入撰稿人、拍照者...等資訊" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="date" class="col-md-2 col-form-label"> 活動日期 </label>
    <div class="col-md-10">
      <input type="date" name="date" id="date" class="form-control" placeholder="請設定活動日期" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="files" class="col-md-2 col-form-label"> 相片或影片 </label>
    <div class="col-md-10">
      <input type="file" name="files[]" id="files" class="form-control" placeholder="請上傳相片或影片" accept=".jpg,.jpeg,.png,.gif,.mp4" multiple />
    </div>
  </div>
  <div class="row mb-3">
    <label for="content" class="col-sm-2 col-form-label"> 文章內容 </label>
    <div class="col-sm-10">
      <textarea class="form-control" name="content" id="content" placeholder="請輸入文章內容" rows="10"><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"> 文章分類 </label>
    <div class="d-flex align-items-center col-sm-10">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="cate_id" id="cate_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['news']->value['cate_id'] == $_smarty_tpl->tpl_vars['k']->value) {?>checked<?php }?> />
        <label class="form-check-label" for="cate_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</label>
      </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  <div class="text-center">
    <?php if ($_smarty_tpl->tpl_vars['news']->value['id']) {?>
    <input type="hidden" name="op" value="update" />
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" />
    <?php } else { ?>
    <input type="hidden" name="op" value="store" />
    <?php }?>
    <button type="submit" class="btn btn-primary">送出</button>
  </div>
</form>
<?php }
}
