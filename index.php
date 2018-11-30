<?php
session_start();
//0.外部ファイル読み込み
include('functions.php');
$hasLogedIn = login_check();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
    <?php if ($hasLogedIn) {?>
    <!-- ログインずみ -->
    <a class="navbar-brand" href="select.php">データ一覧</a>
    <a class="navbar-brand" href="user_index.php">ユーザー登録</a>
    <a class="navbar-brand" href="logout.php">ログアウト</a>
<?php }else{?>
    <!-- ログインできてない -->
    <a class="navbar-brand" href="login.php">ログイン</a>
    <a class="navbar-brand" href="noselect.php">データ一覧</a>
<?php } ?>
    </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
　
<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマークアプリ</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>コメント<textArea name="detail" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
