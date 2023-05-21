<form action="{$url}/admin/index.php" method="post" enctype="multipart/form-data" class="p-2">
  <div class="row mb-3">
    <label for="title" class="col-md-2 col-form-label"> 文章標題 </label>
    <div class="col-md-10">
      <input type="text" name="title" id="title" class="form-control" placeholder="請輸入文章標題" value="{$news.title}" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="info" class="col-md-2 col-form-label"> 相關資訊 </label>
    <div class="col-md-10">
      <input type="text" name="info" id="info" class="form-control" placeholder="可輸入撰稿人、拍照者...等資訊" value="{$news.info}" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="date" class="col-md-2 col-form-label"> 活動日期 </label>
    <div class="col-md-10">
      <input type="date" name="date" id="date" class="form-control" placeholder="請設定活動日期" value="{$news.date}" />
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
      <textarea class="form-control" name="content" id="content" placeholder="請輸入文章內容" rows="10">{$news.content}</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"> 文章分類 </label>
    <div class="d-flex align-items-center col-sm-10">
      {foreach $categories as $k=>$category}
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="cate_id" id="cate_id_{$k}" value="{$k}" {if $news.cate_id==$k}checked{/if} />
        <label class="form-check-label" for="cate_id_{$k}">{$category}</label>
      </div>
      {/foreach}
    </div>
  </div>
  <div class="text-center">
    {if $news.id}
    <input type="hidden" name="op" value="update" />
    <input type="hidden" name="id" value="{$news.id}" />
    {else}
    <input type="hidden" name="op" value="store" />
    {/if}
    <button type="submit" class="btn btn-primary">送出</button>
  </div>
</form>
