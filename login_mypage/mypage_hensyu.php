<?php
mb_internal_encoding("utf8");
session_start();
if (empty($_POST['from_mypage'])) {
  header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta cahrset="UTF-8">
  <title>マイページ登録</title>
  <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>
<header>
    <img src="4eachblog_logo.jpg">
  </header>

<body>
  <main>
    <div class="box">
      <h2>会員情報</h2>
      <div class="hello">
        <?php echo $_SESSION['name'] . "さん こんにちは! "; ?>
      </div>
      <form action="mypage_update.php" method="post">
        <div class="profile_pic">
          <img src="<?php echo $_SESSION['picture']; ?>">
        </div>
        <div class="basic_info">
          <p>氏名:
            <input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name">
          </p>
          <p>メール:
            <input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
          </p>
          <p>パスワード:
            <input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
          </p>
        </div>
        <div class="comments">
          <br>
          <textarea rows="5" cols="45" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
        </div>
        <div class="submit">
          <input type="submit" class="submit_button" size="50" value="この内容に変更する">
        </div>
      </form>
    </div>
  </main>
</body>

</html>