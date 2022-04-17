<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/' . $original_pic_name;

move_uploaded_file($temp_pic_name, './image/' . $original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>マイページ登録</title>
  <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>
  <header>
    <img src="4eachblog_logo.jpg">
  </header>
  <main>
    <div class="confirm">
      <h2>会員登録 確認</h2>
      <p>こちらの内容で登録してもよろしいでしょうか？</p>
      <div class="info">
        <div class="name">
          氏名:<?php echo $_POST['name']; ?><br>
        </div>
        <div class="mail">
          メール:<?php echo $_POST['mail']; ?><br>
        </div>
        <div class="password">
          パスワード:<?php echo $_POST['password']; ?><br>
        </div>
        <div class="picture">
          プロフィール写真:<?php echo $_FILES['picture']['name']; ?><br>
        </div>
        <div class="comments">
          コメント:<?php echo $_POST['comments']; ?><br>
        </div>
      </div>

      <div clas="buttons">
        <div class="button1">
          <a href="register.php">戻って修正する<a />
        </div>
        <div class="submit">
          <form action="register_insert.php" method="post">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name=" name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name=" mail">
            <input type="hidden" value="<?php echo $_POST['password']; ?>" name=" password">
            <input type="hidden" value="<?php echo $path_filename; ?>" name=" path_filename">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name=" comments">
            <input type="submit" class="button2" size="35" value="登録する">
          </form>
        </div>
      </div>
    </div>

  </main>
  <footer>
    © 2018 InterNous.inc. All rights reserved
  </footer>
</body>


</html"