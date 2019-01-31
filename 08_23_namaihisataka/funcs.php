<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=bookm;charset=utf8;host=localhost','root',''); //rootはID、XAPPは最後のパスワード空欄
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());
      }
}


function sqlError($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorSQL:".$error[2]);
  }


function redirect($page){
    header("LOCATION: ".$page);
    exit;
  }
