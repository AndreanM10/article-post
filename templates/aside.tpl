<div class="list-group">
  {foreach $article_count as $yc}
  <a href="index.php?year={$yc.year}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {if $year==$yc.year}active{/if}" aria-current="true">
    {$yc.year}
    <span class="badge bg-success rounded-pill">{$yc.count}</span>
  </a>
  {/foreach}
</div>
{if $is_admin}
  <div class="d-grid gap-2 mt-3">
    <a href="{$url}/admin/index.php" class="btn btn-primary">
      <i class="fas fa-pencil-alt"></i> 新增文章
    </a>
  </div>
{/if}