<?php
session_start();
$id = $_GET["id"];
// echo $id;
include "funcs.php";
sessChk();

$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザー一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー更新</legend>
     <label>名前：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>ID：<input type="text" name="lid" value="<?php echo $row["lid"]; ?>"></label><br>
     <label>PASSWORD：<input type="text" name="lpw" value="<?php echo $row["lpw"]; ?>"></label><br>
     <label>権限：
      <select name="kanri_flg">
        <option value="0">一般ユーザー</option>
        <option value="1">管理者ユーザー</option>
      </select>
     </label><br>
     <label>状況：
      <select name="life_flg">
        <option value="0">退職</option>
        <option value="1">在籍</option>
      </select>
     </label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
