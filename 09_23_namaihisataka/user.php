<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザー表示</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PASSWORD：<input type="text" name="lpw"></label><br>
     <label>権限：
      <select name="kanri_flg">
        <option value="0">一般ユーザー</option>
        <option value="1">管理者ユーザー</option>
      </select>
     </label><br>
     <label>状況：
      <select name="life_flg">
        <option value="0">使用中</option>
        <option value="1">使用不可</option>
      </select>
     </label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
