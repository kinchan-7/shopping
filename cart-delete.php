<?php session_start(); ?>
<?php require 'header.php'; ?>
<div class="main">
<?php
unset($_SESSION['product'][$_REQUEST['id']]);

echo 'カートから商品を削除しました。';

echo '<hr>';

require 'cart.php';
?>
</div>
<?php require 'footer.php'; ?>
