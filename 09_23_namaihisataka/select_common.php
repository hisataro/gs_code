<?php
//1.  DB接続します
session_start();

include "funcs.php";
// sessChk();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  // $error = $stmt->errorInfo();
  // exit("**********:".$error[2]);
  sqlError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    // $view .= $result["id"].",".$result["name"].",".$result["email"].",".$result["naiyou"]."<br>";
    $view .= '<p>';
    // $view .= '<a href="detail.php?id='.$result["id"] .'">';
    $view .= $result["id"]. "," .$result["name"].",".$result["url"].",".$result["comment"];
    $view .= '</a>';
    $view .= '</p>';
     }
  }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブックマーク表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">

      <a class="navbar-brand">ブックマーク表示</a>
      <a class="navbar-brand" href="login.php">ログイン画面</a>
    
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>

      <div class="container jumbotron"><?=$view?></div>

</div>
<!-- Main[End] -->

</body>
</html>
