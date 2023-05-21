<nav class="navbar navbar-expand-lg navbar-dark bg-my-blue mb-5">
  <div class="container">
    <a class="navbar-brand" href="/article"><img src="https://campus-xoops.tn.edu.tw/uploads/logo/210105122929.png" alt="校園日誌" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- 導覽列選項 -->
      <ul class="navbar-nav me-auto mb-2">
        {foreach $categories as $k=>$category}
        <li class="nav-item">
          <a class="nav-link {if $cate_id==$k}active{/if}" href="{$url}/index.php?cate_id={$k}">{$category}</a>
        </li>
        {/foreach}
      </ul>
      <!-- 搜尋框 -->
      <form class="d-flex" action="{$url}/index.php">
        <div class="input-group">
          <input name="keyword" class="form-control border border-end-0" type="search" placeholder="搜尋文章" />
          <button class="btn bg-white border border-start-0" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      {if $is_admin}
      <a href="{$url}/logout.php" class="bg-white m-2 px-3 py-1 rounded-2">登出</a>
      {/if}
    </div>
  </div>
</nav>
