<?php
$id = $_GET["id"];
// echo $id;

//---------------------------
//以下Select.pjpをコピーしてきた。2-24
//---------------------------
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    $row = $stmt->fetch();

}
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマーク表示</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>データ更新</legend>
     <label>書籍名：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>書籍URL：<input type="text" name="url" value="<?php echo $row["url"]; ?>"></label><br>
     <label>書籍コメント：<textArea name="comment" rows="4" cols="40"><?php echo $row["comment"]; ?></textArea></label><br>
     <input type="hidden" name ="id" value="<?php echo $id;?>">  
     <input type="submit" value="更新">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>

