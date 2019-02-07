<?php

//パスワードを作る
//ユーザー管理画面の登録する前に以下書が必要になる
$pw = password_hash("test2",PASSWORD_DEFAULT);
echo $pw.'<br>';


$pw1 = password_hash("test1",PASSWORD_DEFAULT);
echo $pw1;



?>