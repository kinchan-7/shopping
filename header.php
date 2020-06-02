<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nuts Shop</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <a href="index.php"><img alt="Nuts Shop" src="logo.png" style="width:250px; margin:0; padding:0;"></a>
    <nav>
      <ul>
      <?php
      session_start();
      if (isset($_SESSION['customer'])){
          echo'<li><a href="product.php" class="menu">商品一覧</a></li>';
          echo'<li><a href="favorite-show.php" class="menu">お気に入り</a></li>';
          echo'<li><a href="history.php" class="menu">購入履歴</a></li>';
          echo'<li><a href="cart-show.php" class="menu">カート</a></li>';
          echo'<li><a href="customer-input.php" class="menu">会員情報変更</a></li>';
          echo'<li><a href="logout-input.php" class="menu">ログアウト</a></li>';
      } else {
          echo'<li><a href="product.php" class="menu">商品一覧</a></li>';
          echo'<li><a href="favorite-show.php" class="menu">お気に入り</a></li>';
          echo'<li><a href="history.php" class="menu">購入履歴</a></li>';
          echo'<li><a href="cart-show.php" class="menu">カート</a></li>';
          echo'<li><a href="login-input.php" class="menu">ログイン</a></li>';
      }
      ?>
      </ul>
    </nav>
  </header>
