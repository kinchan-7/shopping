<?php require 'header.php'; ?>
<div class="main">
<form action="login-output.php" method="post">
ログイン名<input type="text" name="login"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>
<br>
<a href="customer-input.php">新規会員登録はこちら</a>
</div>
<?php require 'footer.php'; ?>
