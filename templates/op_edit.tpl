{include file='op_create.tpl'}

<!-- 圖片管理 -->
<div class="row row-cols-1 row-cols-md-4 g-4 my-3">
  {foreach $news.files as $file => $thumb}
    <div class="col">
      <div class="card h-100">
        <img src="{$url}/uploads/{$news.id}/thumbs/{$thumb}" class="card-img-top" alt="{$file}" />
        <div class="card-body">
          <div class="card-text">
            <a href="index.php?op=destroy_file&id={$news.id}&file={$file}&thumb={$thumb}" class="btn btn-danger">
              <i class="fas fa-times"></i>
              刪除此檔
            </a>
          </div>
        </div>
      </div>
    </div>
  {/foreach}
</div>