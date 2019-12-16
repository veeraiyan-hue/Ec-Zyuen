<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
  <h1>PHPのページです 【<?php echo 'PHP version: ' . phpversion() ?>】</h1>
  <div>
    <?php
      if (empty($_COOKIE['sample-key'])) {
        echo 'ログインしていません';
      } else {
        echo 'ログイン中です';
      }
    ?>
  </div>
  <div>
    クッキーに登録した値 ⇒ 
    <b>
      <?php
	    $value = 'something from somewhere';
		setcookie("TestCookie", $value);
		setcookie("TestCookie", $value, time()+900);  /* expire in 1 hour */
		setcookie("TestCookie", $value, time()+900, "/~rasmus/", "example.com", 1);
        echo $_COOKIE["TestCookie"];
      ?>
    </b>
  </div>
  <hr/>
  <a href="/web/#/portal"><button>Angularに飛びます</button></a>
</body>
</html>