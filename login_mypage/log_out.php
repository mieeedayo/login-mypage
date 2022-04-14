<?php
session_start();
session_destroy();
header("Location:login.php");

?>

<!DOCTYPE html>
<html lang="ja">
<a href="login.php">ログアウト</a>

</html>
