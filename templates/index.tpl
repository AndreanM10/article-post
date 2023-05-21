<!DOCTYPE html>
<html lang="en">
  <head>
    <title>校園日誌</title>
    {include file='head.tpl'}
  </head>
  <body>
    {include file='nav.tpl'}
    <div class="container">
      <div class="row">
        <div class="col-md-9">{include file="op_{$op}.tpl"}</div>
        <div class="col-md-3">{include file='aside.tpl'}</div>
      </div>
    </div>
  </body>
</html>
