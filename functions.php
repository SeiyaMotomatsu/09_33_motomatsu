<?php
//共通で使うものを別ファイルにしておきましょう。

//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）
function db_conn(){
    try {
      return new PDO('mysql:dbname=gs_f01_db33;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('DbConnectError:'.$e->getMessage());
    }
  }
  
  // テーブル名
  $usertable = 'gs_user_table';
  
  //SQL処理エラー
  function errorMsg($stmt){
    $error = $stmt->errorInfo();
    exit('ErrorQuery:'.$error[2]);
  }
  
  /**
  * XSS
  * @Param:  $str(string) 表示する文字列
  * @Return: (string)     サニタイジングした文字列
  */
  function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }
  
  function chk_ssid(){
    if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid']!=session_id()){
      exit('Login Error.');
    }else{
      session_regenerate_id(true);
      $_SESSION['chk_ssid'] = session_id();
    }
  }

  function login_check(){
    if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid']!=session_id()){
      return false;
    }else{
      return true;
    }
  }

?>

