<!-- 依序取出每篇文章 -->
{foreach $all_news.data as $news} {include file='card.tpl'} {foreachelse}
<div class="alert alert-warning">
  <h2>尚無文章</h2>
</div>
{/foreach}

<!-- 分頁工具 -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item {if !$all_news.prev_pages}disabled{/if}">
      <a class="page-link" href="{$all_news.prev_pages}">上一頁</a>
    </li>
    {foreach $all_news.pages as $page}
    <li class="page-item {if $page.isCurrent}active{/if}">
      <a class="page-link" href="{$page.url}">{$page.num}</a>
    </li>
    {/foreach}
    <li class="page-item {if !$all_news.next_pages}disabled{/if}">
      <a class="page-link" href="{$all_news.next_pages}">下一頁</a>
    </li>
  </ul>
</nav>
