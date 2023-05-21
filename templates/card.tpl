<div class="card mb-3 border border-5 border-bottom-0 border-start-0 border-end-0 py-4">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          <a href="{$url}/index.php?op=show&id={$news.id}">{$news.title}</a>
        </h5>
        <p class="card-text">
          <small>{$news.info} </small>
        </p>
        <p class="card-text">
          <small class="text-muted"> {$news.date} <i class="far fa-eye"></i> {$news.counter} </small>
        </p>
        <p class="card-text">{$news.summary}</p>
      </div>
    </div>
    <div class="col-md-4">
      <a href="{$url}/index.php?op=show&id={$news.id}">
        {if $news.files}
        <img src="{$url}/uploads/{$news.id}/thumbs/{$news.files|reset}" alt="{$news.title}" class="img-fluid img-thumbnail" />
        {else}
        <img src="{$url}/images/none.png" alt="無圖檔" class="img-fluid img-thumbnail" />
        {/if}
      </a>
    </div>
  </div>
</div>
